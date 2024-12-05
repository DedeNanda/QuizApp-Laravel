<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset("image/icon.png") }}" type="image/x-icon">
    <title> {{ $title }}</title>
    <link rel="stylesheet" href="{{asset ('css/register.css')  }}">

</head>
<body>
    <header class="header">
        <h1>Register <span>Quiz App</span></h1>
    </header>

    {{-- form login --}}
    <div class="wrapper">
        <form action="{{ route('proses_register') }}" method="POST">
          {{ csrf_field() }}
          <h2>Register</h2>
            <div class="input-field">
                <input type="email" name="email"  required>
                <label>Enter your email</label>
            </div>
            @if ($errors->has('email'))
            <span class="error"> * {{ $errors->first('email') }}</span>
            @endif
            <div class="input-field">
                <input type="text" name="name"  required>
                <label>Enter your name</label>
            </div>
            @if ($errors->has('name'))
            <span class="error"> * {{ $errors->first('name') }}</span>
            @endif
          <div class="input-field">
                <input type="password" name="password" id="password" required>
                <label>Enter your password</label>
         </div>
            @if ($errors->has('password'))
            <span class="error"> * {{ $errors->first('password') }}</span>
            @endif
          <div class="input-field">
                <input type="password" name="password_confirmation" id="password_confirmation" required>
                <label>Confirm the password</label>
         </div>
            @if ($errors->has('password_confirmation'))
            <span class="error"> * {{ $errors->first('password_confirmation') }}</span>
            @endif
          <button type="submit">Register</button>
          <div class="register">
            <p>Have an account? <a href="{{ route('login') }}">Log in</a></p>
          </div>
        </form>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>