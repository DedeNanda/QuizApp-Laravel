<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset("image/icon.png") }}" type="image/x-icon">
    <title>{{ $title }}</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset("image/icon.png") }}" type="image/x-icon">
    <title>{{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="sidebar">
        <h2>Admin Page</h2>
        <ul class="list-unstyled">
            <li>
                <a class="d-flex align-items-center gap-2" href="{{ route('halaman_admin') }}">
                    <box-icon name='dashboard' type='solid' color='#ffffff' ></box-icon>
                    Dashboard
                </a>
            </li>
            <li>
                <a class="d-flex align-items-center gap-2" href="{{ route('nilai_ujian_ipa') }}">
                    <box-icon name='book' type='solid' color='#ffffff' ></box-icon>
                    Nilai Ujian IPA
                </a>
            </li>
            <li>
                <a class="d-flex align-items-center gap-2" href="{{ route('nilai_ujian_ips') }}">
                    <box-icon name='book' type='solid' color='#ffffff' ></box-icon>
                    Nilai Ujian IPS
                </a>
            </li>
            <li>
                <a class="d-flex align-items-center gap-2" href="{{ route('melihat_user') }}">
                    <box-icon name='user' type='solid' color='#ffffff' ></box-icon>
                    Melihat User
                </a>
            </li>
        </ul>
    </div>
    <div class="main">
        <div class="header d-flex align-items-center">
            <h1>Welcome, {{ Auth::user()->name }}</h1>
            <div class="profile-dropdown ms-3">
                @if(Auth::user()->photo)
                <img src="{{ asset('uploads/photo_admin/' . Auth::user()->photo) }}" alt="Admin" data-bs-toggle="dropdown" aria-expanded="false">
                @else
                <img src="{{ asset('image/user.png') }}" alt="Admin" data-bs-toggle="dropdown" aria-expanded="false">
                @endif
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item d-flex align-items-center gap-2" href="{{ route('change_profile_admin') }}"><box-icon type='solid' name='user-rectangle'></box-icon> Change Profile</a></li>
                    <li><a class="dropdown-item d-flex align-items-center gap-2" href="{{ route('change_password_admin') }}"><box-icon name='key'></box-icon> Change Password</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item d-flex align-items-center gap-2" href="{{ route('logout') }}"><box-icon name='log-out'></box-icon> Log Out</a></li>
                </ul>
            </div>
        </div>
        @yield('content')
        {{-- batas conten --}}
