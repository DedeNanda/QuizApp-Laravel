<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    //proses ganti password
    public function proses_change_password_user(Request $request, $id)
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

    // ini untuk tampilan ganti profile
    public function change_profile_user()
    {

        $data = array(
            'title' => 'Change Profile',
        );

        return view('users.change_profile_users', $data);
    }

    //untuk proses change profle
    public function proses_change_profile_user(Request $request, $id)
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
                $oldPhotoPath = public_path('uploads/photo_users/' . $user->photo);
                if (File::exists($oldPhotoPath)) {
                    File::delete($oldPhotoPath);
                }
            }

            $file = $request->file('photo');
            $photoName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/photo_users'), $photoName);

            $user->update(['photo' => $photoName]);
        }

        return redirect()->back()->with('success', 'Prrofil berhasil diperbarui.');
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

    // untuk menampilkan hasil nilai user setelah ujian
    public function result_value()
    {
        $data = array(
            'title' => 'Hasil Nilai Quiz App',
        );

        return view('users.result_value', $data);
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
