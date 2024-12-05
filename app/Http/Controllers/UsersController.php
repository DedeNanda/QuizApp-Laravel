<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{

    // halaman awal user
    public function index()
    {

        $data = array(
            'title' => 'Welcome Quiz App',
        );

        return view('users.index_users', $data);
    }

    // ini untuk tampilan ganti password
    public function change_password_user()
    {

        $data = array(
            'title' => 'Ganti Password',
        );

        return view('users.change_password_users', $data);
    }

    // ini untuk tampilan ganti profile
    public function change_profile_user()
    {

        $data = array(
            'title' => 'Change Profile',
        );

        return view('users.change_profile_users', $data);
    }

    // untuk menampilkan hasil nilai user setelah ujian
    public function result_value()
    {
        $data = array(
            'title' => 'Hasil Nilai Quiz App',
        );

        return view('users.result_value', $data);
    }

    // untuk soal IPA
    public function soal_ipa()
    {
        $data = array(
            'title' => 'Quiz App IPA',
        );

        return view('users.soal_ipa', $data);
    }

    // untuk soal IPS
    public function soal_ips()
    {
        $data = array(
            'title' => 'Quiz App IPS',
        );

        return view('users.soal_ips', $data);
    }

    // menampilkan nilai history ujian user
    public function history_value_users()
    {
        $data = array(
            'title' => 'History Nilai Ujian',
        );

        return view('users.history_value_users', $data);
    }
}
