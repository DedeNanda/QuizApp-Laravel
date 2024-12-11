<?php


namespace App\Http\Controllers;

use App\Models\Ipa;
use App\Models\Ips;
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

    public function proses_selesai_ujian_soal_ipa(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'soal_1' => 'required|string',
            'soal_2' => 'required|string',
            'soal_3' => 'required|string',
            'soal_4' => 'required|string',
            'soal_5' => 'required|string',
            'soal_6' => 'required|string',
            'soal_7' => 'required|string',
            'soal_8' => 'required|string',
            'soal_9' => 'required|string',
            'soal_10' => 'required|string',
        ]);

        //hitung skor berdasarkan jawaban yang benar
        $answers = [
            'soal_1' => 'B',
            'soal_2' => 'C',
            'soal_3' => 'C',
            'soal_4' => 'B',
            'soal_5' => 'B',
            'soal_6' => 'A',
            'soal_7' => 'C',
            'soal_8' => 'B',
            'soal_9' => 'C',
            'soal_10' => 'A',
        ];

        $score = 0;
        foreach ($answers as $key => $correctAnswer) {
            if ($validated[$key] === $correctAnswer) {
                $score += 10;
            }
        }

        //simpan ke database
        $ipa = Ipa::create([
            'id_user' => auth()->id(),
            'name_user' => auth()->user()->name,
            'soal_1' => $validated['soal_1'],
            'soal_2' => $validated['soal_2'],
            'soal_3' => $validated['soal_3'],
            'soal_4' => $validated['soal_4'],
            'soal_5' => $validated['soal_5'],
            'soal_6' => $validated['soal_6'],
            'soal_7' => $validated['soal_7'],
            'soal_8' => $validated['soal_8'],
            'soal_9' => $validated['soal_9'],
            'soal_10' => $validated['soal_10'],
            'value_result' => $score,
        ]);

        //Redirect ke halaman result_value_ipa dengan dengan id
        return redirect()->route('result_value_ipa', ['id' => $ipa->id])->with('finish', "Jika selesai klik selesai");
    }

    // untuk menampilkan hasil nilai user setelah ujian dari mapel Ipa
    public function result_value_ipa($id)
    {
        $data = array(
            'title' => 'Hasil Nilai Quiz App',
        );

        $result = Ipa::findOrFail($id);

        return view('users.result_value_ipa', compact('result'), $data);
    }


    // untuk soal IPS
    public function soal_ips()
    {
        $data = array(
            'title' => 'Quiz App IPS',
        );

        return view('users.soal_ips', $data);
    }

    public function  proses_selesai_ujian_soal_ips(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'soal_1' => 'required|string',
            'soal_2' => 'required|string',
            'soal_3' => 'required|string',
            'soal_4' => 'required|string',
            'soal_5' => 'required|string',
            'soal_6' => 'required|string',
            'soal_7' => 'required|string',
            'soal_8' => 'required|string',
            'soal_9' => 'required|string',
            'soal_10' => 'required|string',
        ]);

        //hitung skor berdasarkan jawaban yang benar
        $answers = [
            'soal_1' => 'B',
            'soal_2' => 'D',
            'soal_3' => 'C',
            'soal_4' => 'B',
            'soal_5' => 'C',
            'soal_6' => 'C',
            'soal_7' => 'B',
            'soal_8' => 'C',
            'soal_9' => 'B',
            'soal_10' => 'A',
        ];

        $score = 0;
        foreach ($answers as $key => $correctAnswer) {
            if ($validated[$key] === $correctAnswer) {
                $score += 10;
            }
        }

        //simpan ke database
        $ips = Ips::create([
            'id_user' => auth()->id(),
            'name_user' => auth()->user()->name,
            'soal_1' => $validated['soal_1'],
            'soal_2' => $validated['soal_2'],
            'soal_3' => $validated['soal_3'],
            'soal_4' => $validated['soal_4'],
            'soal_5' => $validated['soal_5'],
            'soal_6' => $validated['soal_6'],
            'soal_7' => $validated['soal_7'],
            'soal_8' => $validated['soal_8'],
            'soal_9' => $validated['soal_9'],
            'soal_10' => $validated['soal_10'],
            'value_result' => $score,
        ]);

        //Redirect ke halaman result_value_ipa dengan dengan id
        return redirect()->route('result_value_ips', ['id' => $ips->id])->with('finish', "Jika selesai klik selesai");
    }


    // untuk menampilkan hasil nilai user setelah ujian dari mapel Ips
    public function result_value_ips($id)
    {
        $data = array(
            'title' => 'Hasil Nilai Quiz App',
        );

        $result = Ips::findOrFail($id);

        return view('users.result_value_ips', compact('result'), $data);
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
