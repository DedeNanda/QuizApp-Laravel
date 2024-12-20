<?php

namespace App\Http\Controllers;

use App\Models\Ipa;
use App\Models\Ips;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
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

    //tampilan nilai ujian ipa dan database
    public function nilai_ujian_ipa()
    {

        $soal_ipa = Ipa::latest()->paginate(10);

        $data = array(
            'title' => 'Nilai Ujian Ipa',
        );

        return view('admin.nilai_ujian_ipa', compact('soal_ipa'), $data);
    }

    //tampilan dan aksi pada view untuk IPA
    public function view_nilai_ujian_ipa($id)
    {
        $soal_ipa = Ipa::findOrFail($id);

        $data = array(
            'title' => 'Lihat Nilai IPA'
        );

        return view('admin.aksi_ipa.view_nilai_ipa', compact('soal_ipa'), $data);
    }

    //tampilan dan aksi pada edit untuk IPA
    public function edit_nilai_ujian_ipa($id)
    {
        $soal_ipa = Ipa::findOrFail($id);

        $data = array(
            'title' => 'Lihat Nilai IPA'
        );

        return view('admin.aksi_ipa.edit_nilai_ipa', compact('soal_ipa'), $data);
    }

    //proses edit untuk IPA
    public function proses_edit_nilai_ujian_ipa(Request $request, $id)
    {
        $soal_ipa = Ipa::findOrFail($id);

        // Daftar kunci jawaban
        $kunciJawaban = ['B', 'C', 'C', 'B', 'B', 'A', 'C', 'B', 'C', 'A'];

        $correctCount = 0; // Inisialisasi jumlah jawaban benar

        // Loop melalui semua jawaban yang dikirim
        foreach ($request->jawaban as $index => $jawaban) {
            $soalField = 'soal_' . $index;
            $soal_ipa->$soalField = $jawaban;

            // Cek apakah jawaban benar
            if ($jawaban === $kunciJawaban[$index - 1]) {
                $correctCount++;
            }
        }

        // Perbarui nilai berdasarkan jumlah jawaban benar
        $soal_ipa->value_result = $correctCount * 10; // Misalnya, setiap jawaban benar bernilai 10

        // Simpan perubahan
        $soal_ipa->save();

        return redirect()->route('nilai_ujian_ipa')->with('success', 'Jawaban berhasil diperbarui!');
    }

    //hapus nilai ujian IPA
    public function destroy_nilai_ujian_ipa($id)
    {
        //pilih hapus berdasarkan id
        $soal_ipa = Ipa::findOrFail($id);

        //hapus laporan ipa
        $soal_ipa->delete();

        return redirect()->back()->with('success', 'Data Berhasil dihapus');
    }

    //print berdasarkan user dari nilai Ujian IPA
    public function print_nilai_ujian_ipa_user($id)
    {

        $soal_ipa = Ipa::find($id);

        $pdf = Pdf::loadView('admin.aksi_ipa.print_nilai_ipa', compact('soal_ipa'));
        $pdf->setPaper('a4');
        $filename = 'Print_Nilai_Ujian_Ipa.pdf';

        return $pdf->stream($filename, ['Attachment' => false]);
    }

    //tampilan nilai ujian ips
    public function nilai_ujian_ips()
    {
        $soal_ips = Ips::latest()->paginate(10);

        $data = array(
            'title' => 'Nilai Ujian Ips',
        );

        return view('admin.nilai_ujian_ips', compact('soal_ips'), $data);
    }

    //tampilan dan aksi pada view untuk IPS
    public function view_nilai_ujian_ips($id)
    {
        $soal_ips = Ips::findOrFail($id);

        $data = array(
            'title' => 'Lihat Nilai IPS'
        );

        return view('admin.aksi_ips.view_nilai_ips', compact('soal_ips'), $data);
    }

    //tampilan melihat user 
    public function melihat_user()
    {

        //hanya untuk menampil data user saja tidak admin
        $user = User::where('level', 'user')->paginate(10);

        $data = array(
            'title' => 'Melihat User',
        );

        return view('admin.melihat_user', compact('user'), $data);
    }
}
