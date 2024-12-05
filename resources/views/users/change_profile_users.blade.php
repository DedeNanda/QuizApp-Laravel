@extends('users.users_layout.users_header')
@section('content')
{{-- isi conten lanjutan dari header --}}

{{-- ganti photo user --}}
<div class="change-photo-users">
    <h1>Change Your Profile</h1>
    <div class="profile-photo">
        <img src="profile-placeholder.jpg" alt="Profile Photo" class="profile-img">
        <input type="file" id="upload-photo" class="upload-input">
        <label for="upload-photo" class="upload-btn">Change Photo</label>
    </div>
    <a href="{{ route('halaman_user') }}" class="home-btn">Home</a>
</div>

{{-- bawah ini menampilkan footer --}}
@include('users.users_layout.users_footer')

{{-- end conten --}}
@endsection