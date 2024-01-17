<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Image;
use Toastr;

class ProjectController extends Controller
{
    public function index()
    {
        $project = Project::orderBy('id', 'desc')->get();
        return view('admin.project.index', ['projects' => $project]);
    }

    public function create()
    {
        return view('admin.project.create');
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $request->validate([
                'title' => 'required|string',
                'details'=> 'required',
                'delivery_date'=> 'required',
                'price'=> 'required',
                'type'=>'required',
                'registration_number'=>'required',
                'amenities'=> 'required',
                'supervisor'=> 'required',
            ]);

            $status =  ($request->status) ? '1' : '0';

            $project = Project::create([
                'title' => $request->title,
                'details' => $request->details,
                'delivery_date' => $request->delivery_date,
                'price' => $request->price,
                'type' => $request->type,
                'amenities' => $request->amenities,
                'registration_number' => $request->registration_number,
                'status' => $status,
            ]);

            if ($request->hasFile('images')) {
                $files = $request->file('images');
                foreach ($files as $file) {
                    $image_name = $file->hashName(); // Use $file instead of $files
                    $image_path = $file->storeAs('images', $image_name, 'public'); // Use $file instead of $files

                    Image::create([
                        'imageable_id' => $project->id,
                        'imageable_type' => 'App\Models\Project',
                        'file_name' => $image_name,
                        'file_path' => $image_path,
                    ]);
                }
            }
            DB::commit();
            return redirect()->back()->with('success', 'Project create successfully!');
        }catch (\Exception $e) {
            DB::rollBack();
            \Log::error($e);

            return redirect()->back()->with('error', 'An error occurred while processing the request.');
        }

    }

    public function show($id)
    {
        $project_title = Project::find($id);
        $project_details = Project::whereId($id)->with('image')->get();
        return view('admin.project.view', compact('project_title'))->with([
            'project_detail' => $project_details,
        ]);
    }
}
