<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index()
    {
        return view('admin.vendor.index');
    }

    public function create()
    {
        return view('admin.vendor.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'email'=> 'required|email|unique:users,email',
            'phone' => 'required|digit:10',
        ]);

        $request['status'] = ($request->status) ? '1' : '0';
    }
}
