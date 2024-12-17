@extends('admin.admin_layout.admin_header')
{{-- untuk menampilkan header --}}

@section('content')
{{-- isi conten lanjutan dari header --}}

{{-- alert success berhasil change password akun --}}
@if(session('success'))
<div id="success-message-user" data-message="{{ session('success') }}"></div>
@endif

<div class="change-password-users">
  <h1>Change Password</h1>
  <form action="{{ route('proses_change_passowrd_admin', Auth::id()) }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <!-- Password Lama -->
    <div class="form-group">
      <label for="password_old">Password Lama</label>
      <input type="password" id="password_old" name="password_old" placeholder="Masukkan Password Lama" required>
      @error('password_old') 
        <div class="alert">
          {{ $message }}
        </div>
      @enderror
    </div>

    <!-- Password Baru -->
    <div class="form-group">
      <label for="password">Password Baru</label>
      <input type="password" id="password" name="password" placeholder="Masukkan Password Baru" required>
      @error('password')
        <div class="alert">
          {{ $message }}
        </div>
      @enderror
    </div>

    <!-- Konfirmasi Password Baru -->
    <div class="form-group">
      <label for="confirm_password">Konfirmasi Password Baru</label>
      <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Password Baru" required>
      @error('confirm_password')
        <div class="alert">
          {{ $message }}
        </div>
      @enderror
    </div>

    <button type="submit" class="btn-submit">Ganti Password</button>
  </form>
  <a href="{{ route('halaman_admin') }}" class="btn-home">Home</a>
</div>

{{-- bawah ini menampilkan footer --}}
@include('admin.admin_layout.admin_footer')

{{-- end conten --}}
@endsection