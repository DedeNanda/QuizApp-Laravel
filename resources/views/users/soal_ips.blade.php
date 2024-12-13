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
<div class="choose-soal">
  <h1>Soal IPS</h1>

  <div class="timer-container">
    <p id="timer_ipa">Waktu Tersisa: 15:00</p>
  </div>

    <form action="{{ route('proses_selesai_ujian_soal_ips') }}" method="POST">
      {{ csrf_field() }}

      <!-- Soal 1 -->
      <div class="soal">
        <h3>1. Sumber daya alam yang tidak dapat diperbarui adalah...</h3>
        <label><input type="radio" name="soal_1" value="A"> A. Air</label><br>
        <label><input type="radio" name="soal_1" value="B"> B. Batu Bara</label><br>
        <label><input type="radio" name="soal_1" value="C"> C. Angin</label><br>
        <label><input type="radio" name="soal_1" value="D"> D. Tanah</label>
      </div>

      <!-- Soal 2 -->
      <div class="soal">
        <h3>2. Proklamasi kemerdekaan Indonesia dibacakan pada tanggal...</h3>
        <label><input type="radio" name="soal_2" value="A"> A. 14 Agustus 1945</label><br>
        <label><input type="radio" name="soal_2" value="B"> B. 15 Agustus 1945</label><br>
        <label><input type="radio" name="soal_2" value="C"> C. 16 Agustus 1945</label><br>
        <label><input type="radio" name="soal_2" value="D"> D. 17 Agustus 1945</label>
      </div>

      <!-- Soal 3 -->
      <div class="soal">
        <h3>3. Nama kerajaan Hindu pertama di Indonesia adalah...</h3>
        <label><input type="radio" name="soal_3" value="A"> A. Majapahit</label><br>
        <label><input type="radio" name="soal_3" value="B"> B. Sriwijaya</label><br>
        <label><input type="radio" name="soal_3" value="C"> C. Kutai</label><br>
        <label><input type="radio" name="soal_3" value="D"> D. Tarumanegara</label>
      </div>

      <!-- Soal 4 -->
      <div class="soal">
        <h3>4. Benua yang dijuluki sebagai benua hitam adalah...</h3>
        <label><input type="radio" name="soal_4" value="A"> A. Asia</label><br>
        <label><input type="radio" name="soal_4" value="B"> B. Afrika</label><br>
        <label><input type="radio" name="soal_4" value="C"> C. Eropa</label><br>
        <label><input type="radio" name="soal_4" value="D"> D. Australia</label>
      </div>

      <!-- Soal 5 -->
      <div class="soal">
        <h3>5. Gunung api tertinggi di Indonesia adalah...</h3>
        <label><input type="radio" name="soal_5" value="A"> A. Gunung Rinjani</label><br>
        <label><input type="radio" name="soal_5" value="B"> B. Gunung Semeru</label><br>
        <label><input type="radio" name="soal_5" value="C"> C. Gunung Kerinci</label><br>
        <label><input type="radio" name="soal_5" value="D"> D. Gunung Marapi</label>
      </div>

      <!-- Soal 6 -->
      <div class="soal">
        <h3>6. Jenis tanaman yang paling banyak ditemukan di daerah tropis adalah...</h3>
        <label><input type="radio" name="soal_6" value="A"> A. Gandum</label><br>
        <label><input type="radio" name="soal_6" value="B"> B. Jagung</label><br>
        <label><input type="radio" name="soal_6" value="C"> C. Padi</label><br>
        <label><input type="radio" name="soal_6" value="D"> D. Kentang</label>
      </div>

      <!-- Soal 7 -->
      <div class="soal">
        <h3>7. Penyebab utama terjadinya gempa tektonik adalah...</h3>
        <label><input type="radio" name="soal_7" value="A"> A. Letusan gunung merapi</label><br>
        <label><input type="radio" name="soal_7" value="B"> B. Pergerakan lempeng bumi</label><br>
        <label><input type="radio" name="soal_7" value="C"> C. Erosi tanah</label><br>
        <label><input type="radio" name="soal_7" value="D"> D. Hujan deras</label>
      </div>

      <!-- Soal 8 -->
      <div class="soal">
        <h3>8. Negara yang dikenal sebagai “Negeri Tirai Bambu” adalah...</h3>
        <label><input type="radio" name="soal_8" value="A"> A. Jepang</label><br>
        <label><input type="radio" name="soal_8" value="B"> B. Korea Selatan</label><br>
        <label><input type="radio" name="soal_8" value="C"> C. Tiongkok</label><br>
        <label><input type="radio" name="soal_8" value="D"> D. Vietnam</label>
      </div>

      <!-- Soal 9 -->
      <div class="soal">
        <h3>9. Perjanjian Linggarjati terjadi antara Indonesia dan...</h3>
        <label><input type="radio" name="soal_9" value="A"> A. Belanda</label><br>
        <label><input type="radio" name="soal_9" value="B"> B. Jepang</label><br>
        <label><input type="radio" name="soal_9" value="C"> C. Inggris</label><br>
        <label><input type="radio" name="soal_9" value="D"> D. Portugis</label>
      </div>

      <!-- Soal 10 -->
      <div class="soal">
        <h3>10. Sungai terpanjang di dunia adalah...</h3>
        <label><input type="radio" name="soal_10" value="A"> A. Sungai Nil</label><br>
        <label><input type="radio" name="soal_10" value="B"> B. Sungai Amazon</label><br>
        <label><input type="radio" name="soal_10" value="C"> C. Sungai Mississippi</label><br>
        <label><input type="radio" name="soal_10" value="D"> D. Sungai Yangtze</label>
      </div>
      
    <button type="submit" class="save-btn">Selesai</button>
  </form>
</div>

    <script src="{{ asset("js/script.js") }}"></script>
    {{-- bawah ini untuk sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- bagian bawah ini untuk script waktu habis --}}
    <script>
      // Waktu mundur dalam detik (contoh: 15 menit = 900 detik)
      let countdownTime = 900;
  
      // Fungsi format waktu
      function formatTime(seconds) {
          const minutes = Math.floor(seconds / 60);
          const remainingSeconds = seconds % 60;
          return `${minutes}:${remainingSeconds < 10 ? "0" : ""}${remainingSeconds}`;
      }
  
      // Update timer di halaman
      function updateTimer() {
          const timerElement = document.getElementById("timer_ipa");
          timerElement.textContent = `Waktu Tersisa: ${formatTime(countdownTime)}`;
          countdownTime--;
  
          // Jika waktu habis, arahkan ke halaman selesai
          if (countdownTime < 0) {
              clearInterval(timerInterval);
              alert("Waktu habis! Anda akan diarahkan ke halaman selesai.");
              window.location.href = "{{ route('proses_selesai_ujian_soal_ipa') }}"; // Redirect ke halaman selesai
          }
      }
  
      // Panggil updateTimer setiap 1 detik
      const timerInterval = setInterval(updateTimer, 1000);
      </script>
</body>
</html>



