@extends('users.users_layout.users_header')
@section('content')
{{-- isi conten lanjutan dari header --}}

{{-- ganti photo user --}}

@if(session('success'))
    <div id="success-message" data-message="{{ session('success') }}"></div>
@endif

<div class="change-photo-users">
    <h1>Change Your Profile</h1>
    <form action="{{ route('proses_change_profile_user', Auth::id()) }}" method="POST" enctype="multipart/form-data" class="profile-form">
        {{ csrf_field() }}
        <div class="profile-photo">
            @if(Auth::user()->photo)
            <img src="{{ asset("uploads/photo_users/" .Auth::user()->photo)  }}" alt="Profile Photo" loading="lazy" class="profile-img me-2">
            @else
            <img src="{{ asset("image/user.png") }}" alt="Profile Photo" loading="lazy" class="profile-img me-2">
            @endif
        </div>
        <div class="form-group">
            <label for="name">Upload Gambar</label>
            <input type="file" id="photo" name="photo" class="upload-btn"> 
        </div>  
        <div class="form-group">
            <label for="name">Nama</label>
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