<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    //proses change password admin
    public function proses_change_passowrd_admin(Request $request, $id)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'password_old' => 'required',
            'password' => 'required|string|min:6|confirmed', // 'confirmed' mencari password_confirmation
        ], [
            'password.required' => 'Password baru harus diisi.',
            'password.min' => 'Password baru minimal 6 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Ambil user berdasarkan ID
        $user = User::findOrFail($id);

        // Validasi password lama
        if (!Hash::check($request->password_old, $user->password)) {
            return redirect()->back()->withInput()->withErrors(['password_old' => 'Password lama tidak sesuai.']);
        }

        // Update password baru
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->back()->with('success', 'Password berhasil diubah. Silakan login kembali.');
    }

    //tampilan change profile admin
    public function change_profile_admin()
    {

        $data = array(
            'title' => 'Change Profile Admin',
        );

        return view('admin.change_profile_admin', $data);
    }

    //proses ganti photo profile
    public function proses_change_profile_admin(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg|max:4096',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:4096|unique:users,email' . $user->$id,
        ]);

        //update nama dan email
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        //update foto jika diunggah
        if ($request->hasFile('photo')) {
            if ($user->photo) {
                $oldPhotoPath = public_path('uploads/photo_admin/' . $user->photo);
                if (File::exists($oldPhotoPath)) {
                    File::delete($oldPhotoPath);
                }
            }

            $file = $request->file('photo');
            $photoName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/photo_admin'), $photoName);

            $user->update(['photo' => $photoName]);
        }

        return redirect()->back()->with('success', 'Prrofil berhasil diperbarui.');
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
