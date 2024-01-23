<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function index()
    {
        $meetings = Meeting::orderBy('id', 'DESC')->get();
        return view('admin.meeting.index', ['project_meetings' => $meetings]);
    }

    public function create(Request $request)
    {
        return view('admin.meeting.create', ['id' => $request->id]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'purpose' => 'required|string',
            'meeting_date' => 'required',
        ]);

        Meeting::create([
            'projectable_id' => $request->id,
            'projectable_type' => 'App\Models\Project',
            'title' => $request->title,
            'purpose' => $request->purpose,
            'meeting_date' => $request->meeting_date,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Meeting created successfully!');
    }

    public function show($id)
    {
        $pro_meeting = Project::where('id', $id)->with('image')->with('meeting')->get();
        $user = User::where('status', 1)->get();
        return view('admin.meeting.view', ['pro_meeting' => $pro_meeting, 'user' => $user]);
    }

    public function edit($id)
    {
        $meeting = Meeting::find($id);
        return view('admin.meeting.edit', ['meeting' => $meeting]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'purpose' => 'required|string',
            'meeting_date' => 'required',
        ]);

        Meeting::where('id', $id)->update([
            'title' => $request->title,
            'purpose' => $request->purpose,
            'meeting_date' => $request->meeting_date,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Meeting updated successfully!');
    }

    public function delete($id)
    {
        Meeting::find($id)->forceDelete();
        return redirect()->back()->with('success', 'Meeting deleted successfully!');
    }
}
