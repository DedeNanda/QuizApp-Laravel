<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset("image/icon.png") }}" type="image/x-icon">
    <title> {{ $title }}</title>
    <link rel="stylesheet" href="{{asset ('css/login.css')  }}">

      {{-- font awesome --}}
      <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
</head>
<body>
    <header class="header">
        <h1>Welcome <span>Quiz App</span></h1>
    </header>


    {{-- alert success berhasil buat akun --}}
    @if(session('success'))
      <div id="success-message" data-message="{{ session('success') }}"></div>
    @endif

    {{-- alert jika gagal login --}}
    @if(session('login_gagal'))
      <div id="error-message" data-message="{{ session('login_gagal') }}"></div>
    @endif
  
    {{-- form login --}}
    <div class="wrapper">
        <form action="{{ route('proses_login') }}" method="POST">
          {{ csrf_field() }}
          <h2>Login</h2>
            <div class="input-field">
            <input type="email" name="email"  required>
            <label>Enter your email</label>
          </div>
          <div class="input-field">
            <input type="password" name="password" id="password" required>
            <label>Enter your password</label>
            <div class="icon-eyes" onclick="viewPassword()"> 
              <i class="fa-solid fa-eye" id="show-icon" style="color: #ffffff;"></i>
              <i class="fa-solid fa-eye-slash" id="hide-icon" style="color: #ffffff;"></i>
            </div>
          </div>
          <button type="submit">Log In</button>
          <div class="register">
            <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
          </div>
        </form>
      </div>
      <script src="{{ asset('js/script.js') }}"></script>

      {{-- sweet alert --}}
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>