<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Address;
use App\Models\Project;
use App\Models\User;

class SupervisorController extends Controller
{
    public function index()
    {
        $supervisor = User::where('user_role_id', 3)->orderBy('id', 'DESC')->get();
        return view('admin.supervisor.index', ['visor' => $supervisor]);
    }

    public function create()
    {
        return view('admin.supervisor.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'password' => 'required|min:8',
        ]);
        $supervisor = User::create([
            'user_role_id' => 3,
            'username' => $request->email,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
            'status' => $request->status,
        ]);


        return redirect()->back()->with('success', 'Supervisor created successfully!');
    }

    public function show($id)
    {
        $visor_detail = User::where('id', $id)->with('address')->with('image')->first();
        $visor_projects = Project::where('superVisor_id', $id)->get();
        return view('admin.supervisor.view', ['visor_project' =>  $visor_projects, 'visor_detail' => $visor_detail]);
    }

    public function edit($id)
    {
        $supervisor_edit = User::where('id', $id)->with('address')->first();
        return view('admin.supervisor.edit', ['visor_edit' => $supervisor_edit]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($request->id);
        $request->validate([
            'name' => 'required|string',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->status = $request->status;

        $user->address()->updateOrCreate(
            [],
            [
                'address_line_1' => $request->address_line_1,
                'address_line_2'  => $request->address_line_2,
                'pin'  => $request->pin,
                'state'  => $request->state,
                'city'  => $request->city,
                'country'  => $request->country,
                'description'  => $request->description,
            ]
        );

        $user->save();

        return redirect()->back()->with('success', 'Supervisor updated successfully!');
    }

    public function trash($id)
    {
        User::where('id', $id)->delete();
        Address::where('addressable_id', $id)
            ->where('addressable_type', 'App\Models\User')
            ->delete();
        return redirect()->back()->with('success', 'Supervisor is in trash');
    }

    public function trashed()
    {
        $visor_trashed = User::onlyTrashed()->orderBy('id', 'DESC')->get();
        return view('admin.supervisor.trash', ['visor_trashed' => $visor_trashed]);
    }

    public function restore($id)
    {
        User::where('id', $id)->withTrashed()->restore();
        Address::where('addressable_id', $id)
            ->where('addressable_type', 'App\Models\User')->withTrashed()->restore();
        return redirect()->back()->with('success', 'supervisor is Restored');
    }

    public function delete($id)
    {
        User::where('id', $id)->withTrashed()->forceDelete();
        Address::where('addressable_id', $id)
            ->where('addressable_type', 'App\Models\User')->withTrashed()->forceDelete();
        return redirect()->back()->with('success', 'supervisor is Deleted Sucessfully');
    }
}
