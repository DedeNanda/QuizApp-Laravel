<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset("image/icon.png") }}" type="image/x-icon">
    <title>{{ $title }}</title>
    
    {{-- boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <link rel="stylesheet" href="{{ asset("css/user.css") }}">
  </head>
<body>
   
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand">Nama User</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="{{ asset('image/user.png') }}" alt="User Image" class="rounded-circle me-2">
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('change_password_user') }}">Change Password</a></li>
              <li><a class="dropdown-item" href="{{ route('change_profile_user') }}">Change Profile</a></li>
              <li><a class="dropdown-item" href="{{ route('logout') }}">Quit</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <p id="dateDisplay"></p>
  
    @yield('content')
    {{-- batas conten --}}