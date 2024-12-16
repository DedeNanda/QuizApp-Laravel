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

    //tampilan change profile admin
    public function change_profile_admin()
    {

        $data = array(
            'title' => 'Change Profile Admin',
        );

        return view('admin.change_profile_admin', $data);
    }

    //tampilan nilai ujian ipa 
    public function nilai_ujian_ipa()
    {

        $data = array(
            'title' => 'Nilai Ujian Ipa',
        );

        return view('admin.nilai_ujian_ipa', $data);
    }

    //tampilan nilai ujian ips
    public function nilai_ujian_ips()
    {

        $data = array(
            'title' => 'Nilai Ujian Ips',
        );

        return view('admin.nilai_ujian_ips', $data);
    }

    //tampilan melihat user 
    public function melihat_user()
    {

        $data = array(
            'title' => 'Melihat User',
        );

        return view('admin.melihat_user', $data);
    }
}
