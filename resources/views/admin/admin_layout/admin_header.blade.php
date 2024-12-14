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
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Users</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Messages</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>
    <div class="main">
        <div class="header d-flex align-items-center">
            <h1>Welcome, Admin</h1>
            <div class="profile-dropdown ms-3">
                <img src="https://via.placeholder.com/50" alt="Admin" data-bs-toggle="dropdown" aria-expanded="false">
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Change Profile</a></li>
                    <li><a class="dropdown-item" href="#">Change Password</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Log Out</a></li>
                </ul>
            </div>
        </div>
        @yield('content')
        {{-- batas conten --}}
