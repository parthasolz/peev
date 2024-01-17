<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index()
    {
        $vendors = User::where('user_role_id', 2)->orderBy('id', 'DESC')->get();
        return view('admin.vendor.index', ['vendors' => $vendors]);
    }

    public function create()
    {
        return view('admin.vendor.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'password' => 'required|min:8',
        ]);
        $vendor = User::create([
            'user_role_id' => 2,
            'username' => $request->email,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
            'status' => $request->status,
        ]);


        return redirect()->back()->with('success', 'Vendor created successfully!');
    }

    public function show($id)
    {
        $vendor_detail = User::where('id', $id)->with('address')->with('image')->first();
        $user_projects = Project::where('vendor_id', $id)->get();
        return view('admin.vendor.view', ['user_project' => $user_projects, 'vendor_detail' => $vendor_detail]);
    }

    public function edit($id)
    {
        $vendor_edit = User::where('id', $id)->with('address')->first();
        return view('admin.vendor.edit', ['vendor_edit' => $vendor_edit]);
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

        return redirect()->back()->with('success', 'Vendor updated successfully!');
    }

    public function trash($id)
    {
        User::where('id', $id)->delete();
        Address::where('addressable_id', $id)
            ->where('addressable_type', 'App\Models\User')
            ->delete();
        return redirect()->back()->with('success', 'Vendor is in trash');
    }

    public function trashed()
    {
        $users_trashed = User::onlyTrashed()->orderBy('id', 'DESC')->get();
        return view('admin.vendor.trash', ['trashed' => $users_trashed]);
    }

    public function restore($id)
    {
        User::where('id', $id)->withTrashed()->restore();
        Address::where('addressable_id', $id)
            ->where('addressable_type', 'App\Models\User')->withTrashed()->restore();
        return redirect()->back()->with('success', 'Vendor is Restored');
    }

    public function delete($id)
    {
        User::where('id', $id)->withTrashed()->forceDelete();
        Address::where('addressable_id', $id)
            ->where('addressable_type', 'App\Models\User')->withTrashed()->forceDelete();
        return redirect()->back()->with('success', 'Vendor is Deleted Sucessfully');
    }
}
