<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminHome;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    public function create()
    {
        return view('AdminHome');
    }
        public function store(Request $request)
        {
        $admin = new AdminHome();
        $admin->Heading = $request->input('Heading');
        $admin->text = $request->input('text');
        $admin->slide1 = $request->input('slide1');
        $admin->slide2 = $request->input('slide2');
        $admin->slide3 = $request->input('slide3');
        $admin->save();

        return view('AdminHome')->with('success', 'Notice created successfully!');
    }

    public function show()
    {
        $data = AdminHome::latest('Heading')->get();

        return view('Dashboard', compact('data'));
        //$data = AdminHome::all();
       // return $data; //view('Dashboard',['admin_homes' =>$data]);
    }
}
