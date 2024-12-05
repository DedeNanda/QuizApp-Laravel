@extends('users.users_layout.users_header')
@section('content')
{{-- isi conten lanjutan dari header --}}

{{-- ganti photo user --}}
<div class="change-photo-users">
    <h1>Change Your Profile</h1>
    {{-- {{ route('proses_change_profile_user', Auth::id()) }} --}}
    <form action="#" method="POST" enctype="multipart/form-data" class="profile-form">
        {{ csrf_field() }}
        <div class="profile-photo">
            <img src="{{ asset("image/user.png") }}" alt="Profile Photo" loading="lazy" class="profile-img me-2">
            <input type="file" id="photo" name="photo" class="photo"> 
            {{-- bisa pakai label tapi samakan clasnya --}}
            <label for="photo" class="upload-btn">Change Photo</label>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-input" placeholder="Your Name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-input" placeholder="Your Email">
        </div>
        <button type="submit" class="save-btn">Save Changes</button>
        <a href="{{ route('halaman_user') }}" class="home-btn">Home</a>
    </form>
</div>

{{-- bawah ini menampilkan footer --}}
@include('users.users_layout.users_footer')

{{-- end conten --}}
@endsection