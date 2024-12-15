<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $data = array(
            'title' => 'Welcome Admin',
        );

        return view('admin.index_admin', $data);
    }


    //tampilan change password admin
    public function change_password_admin()
    {

        $data = array(
            'title' => 'Change Password Admin',
        );

        return view('admin.change_password_admin', $data);
    }
}
