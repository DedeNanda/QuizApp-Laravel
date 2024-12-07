<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="{{ asset("image/icon.png") }}" type="image/x-icon">
  <title>{{ $title }}</title>

  <link rel="stylesheet" href="{{ asset("css/ipa_ips.css") }}">
</head>
<body>
  {{-- Pilihan ganda IPS --}}
<div class="soal-ips">
  <h1>ini soal IPS</h1>

    <form action="#" method="POST">
      {{ csrf_field() }}

      <!-- Soal 1 -->
      <div class="soal">
        <h3>1. </h3>
        <label><input type="radio" name="soal1" value="A"> A. </label><br>
        <label><input type="radio" name="soal1" value="B"> B. </label><br>
        <label><input type="radio" name="soal1" value="C"> C. </label><br>
        <label><input type="radio" name="soal1" value="D"> D. </label>
      </div>

      <!-- Soal 2 -->
      <div class="soal">
        <h3>2. </h3>
        <label><input type="radio" name="soal1" value="A"> A. </label><br>
        <label><input type="radio" name="soal1" value="B"> B. </label><br>
        <label><input type="radio" name="soal1" value="C"> C. </label><br>
        <label><input type="radio" name="soal1" value="D"> D. </label>
      </div>

      <!-- Soal 3 -->
      <div class="soal">
        <h3>3. </h3>
        <label><input type="radio" name="soal1" value="A"> A. </label><br>
        <label><input type="radio" name="soal1" value="B"> B. </label><br>
        <label><input type="radio" name="soal1" value="C"> C. </label><br>
        <label><input type="radio" name="soal1" value="D"> D. </label>
      </div>

      <!-- Soal 4 -->
      <div class="soal">
        <h3>4. </h3>
        <label><input type="radio" name="soal1" value="A"> A. </label><br>
        <label><input type="radio" name="soal1" value="B"> B. </label><br>
        <label><input type="radio" name="soal1" value="C"> C. </label><br>
        <label><input type="radio" name="soal1" value="D"> D. </label>
      </div>

      <!-- Soal 5 -->
      <div class="soal">
        <h3>5. </h3>
        <label><input type="radio" name="soal1" value="A"> A. </label><br>
        <label><input type="radio" name="soal1" value="B"> B. </label><br>
        <label><input type="radio" name="soal1" value="C"> C. </label><br>
        <label><input type="radio" name="soal1" value="D"> D. </label>
      </div>

      <!-- Soal 6 -->
      <div class="soal">
        <h3>6. </h3>
        <label><input type="radio" name="soal1" value="A"> A. </label><br>
        <label><input type="radio" name="soal1" value="B"> B. </label><br>
        <label><input type="radio" name="soal1" value="C"> C. </label><br>
        <label><input type="radio" name="soal1" value="D"> D. </label>
      </div>

      <!-- Soal 7 -->
      <div class="soal">
        <h3>7. </h3>
        <label><input type="radio" name="soal1" value="A"> A. </label><br>
        <label><input type="radio" name="soal1" value="B"> B. </label><br>
        <label><input type="radio" name="soal1" value="C"> C. </label><br>
        <label><input type="radio" name="soal1" value="D"> D. </label>
      </div>

      <!-- Soal 8 -->
      <div class="soal">
        <h3>8. </h3>
        <label><input type="radio" name="soal1" value="A"> A. </label><br>
        <label><input type="radio" name="soal1" value="B"> B. </label><br>
        <label><input type="radio" name="soal1" value="C"> C. </label><br>
        <label><input type="radio" name="soal1" value="D"> D. </label>
      </div>

      <!-- Soal 9 -->
      <div class="soal">
        <h3>9. </h3>
        <label><input type="radio" name="soal1" value="A"> A. </label><br>
        <label><input type="radio" name="soal1" value="B"> B. </label><br>
        <label><input type="radio" name="soal1" value="C"> C. </label><br>
        <label><input type="radio" name="soal1" value="D"> D. </label>
      </div>

      <!-- Soal 10 -->
      <div class="soal">
        <h3>10. </h3>
        <label><input type="radio" name="soal1" value="A"> A. </label><br>
        <label><input type="radio" name="soal1" value="B"> B. </label><br>
        <label><input type="radio" name="soal1" value="C"> C. </label><br>
        <label><input type="radio" name="soal1" value="D"> D. </label>
      </div>
      
    <button type="submit" class="save-btn">Selesai</button>
  </form>
</div>

    <script src="{{ asset("js/script.js") }}"></script>
    {{-- bawah ini untuk sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>



