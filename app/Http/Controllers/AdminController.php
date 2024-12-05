<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $data = array(
            'title' => 'Welcome Quiz App',
        );

        return view('admin.index_admin', $data);
    }
}
