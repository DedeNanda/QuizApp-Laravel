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
  {{-- Pilihan ganda IPA --}}
<div class="soal-ipa">
  <h1>ini soal IPA</h1>

    <form action="#" method="POST">
      {{ csrf_field() }}

      <!-- Soal 1 -->
      <div class="soal">
        <h3>1. Proses tumbuhan hijau mengubah karbon dioksida dan air menjadi makanan dengan bantuan cahaya matahari disebut...</h3>
        <label><input type="radio" name="soal1" value="A"> A. Respirasi</label><br>
        <label><input type="radio" name="soal1" value="B"> B. Fotosintesis (ini jawabannya)</label><br>
        <label><input type="radio" name="soal1" value="C"> C. Fermentasi</label><br>
        <label><input type="radio" name="soal1" value="D"> D. Transpirasi</label>
      </div>
      
      <!-- Soal 2 -->
      <div class="soal">
        <h3>2. Benda yang tidak dapat menghantarkan panas disebut...</h3>
        <label><input type="radio" name="soal2" value="A"> A. Konduktor</label><br>
        <label><input type="radio" name="soal2" value="B"> B. Semikonduktor</label><br>
        <label><input type="radio" name="soal2" value="C"> C. Isolator (ini jawabannya)</label><br>
        <label><input type="radio" name="soal2" value="D"> D. Elektromagnet</label>
      </div>

      <!-- Soal 3 -->
      <div class="soal">
        <h3>3. Sumber energi utama bagi kehidupan di bumi adalah...</h3>
        <label><input type="radio" name="soal3" value="A"> A. Air</label><br>
        <label><input type="radio" name="soal3" value="B"> B. Angin</label><br>
        <label><input type="radio" name="soal3" value="C"> C. Matahari (ini jawabannya)</label><br>
        <label><input type="radio" name="soal3" value="D"> D. Minyak bumi</label>
      </div>

      <!-- Soal 4 -->
      <div class="soal">
        <h3>4. Hewan berikut yang melakukan adaptasi dengan cara mimikri adalah...</h3>
        <label><input type="radio" name="soal4" value="A"> A. Cicak</label><br>
        <label><input type="radio" name="soal4" value="B"> B. Bunglon (ini jawabannya)</label><br>
        <label><input type="radio" name="soal4" value="C"> C. Kelelawar</label><br>
        <label><input type="radio" name="soal4" value="D"> D. Harimau</label>
      </div>

      <!-- Soal 5 -->
      <div class="soal">
        <h3>5. Perubahan wujud air menjadi es disebut...</h3>
        <label><input type="radio" name="soal5" value="A"> A. Menguap</label><br>
        <label><input type="radio" name="soal5" value="B"> B. Membeku (ini jawabannya)</label><br>
        <label><input type="radio" name="soal5" value="C"> C. Mengembun</label><br>
        <label><input type="radio" name="soal5" value="D"> D. Menyublim</label>
      </div>

      <!-- Soal 6 -->
      <div class="soal">
        <h3>6. Bagian tumbuhan yang berfungsi menyerap air dan mineral dari tanah adalah...</h3>
        <label><input type="radio" name="soal5" value="A"> A. Akar (ini jawabannya)</label><br>
        <label><input type="radio" name="soal5" value="B"> B. Batang</label><br>
        <label><input type="radio" name="soal5" value="C"> C. Daun</label><br>
        <label><input type="radio" name="soal5" value="D"> D. Bunga</label>
      </div>

      <!-- Soal 7 -->
      <div class="soal">
        <h3>7. Planet terdekat dari matahari adalah...</h3>
        <label><input type="radio" name="soal5" value="A"> A. Venus</label><br>
        <label><input type="radio" name="soal5" value="B"> B. Mars</label><br>
        <label><input type="radio" name="soal5" value="C"> C. Merkurius (ini jawabannya)</label><br>
        <label><input type="radio" name="soal5" value="D"> D. Bumi</label>
      </div>

      <!-- Soal 8 -->
      <div class="soal">
        <h3>8. Gas yang diperlukan tumbuhan untuk fotosintesis adalah...</h3>
        <label><input type="radio" name="soal5" value="A"> A. Oksigen</label><br>
        <label><input type="radio" name="soal5" value="B"> B. Karbon dioksida (ini jawabannya)</label><br>
        <label><input type="radio" name="soal5" value="C"> C. Nitrogen</label><br>
        <label><input type="radio" name="soal5" value="D"> D. Hidrogen</label>
      </div>

      <!-- Soal 9 -->
      <div class="soal">
        <h3>9. Gaya gravitasi bumi menyebabkan benda yang dilempar ke atas akan...</h3>
        <label><input type="radio" name="soal5" value="A"> A. Tetap di udara</label><br>
        <label><input type="radio" name="soal5" value="B"> B. Bergerak ke samping</label><br>
        <label><input type="radio" name="soal5" value="C"> C. Jatuh ke bawah (ini jawabannya)</label><br>
        <label><input type="radio" name="soal5" value="D"> D. Melayang di udara</label>
      </div>

      <!-- Soal 10 -->
      <div class="soal">
        <h3>10. Bagian tubuh manusia yang berfungsi sebagai alat peraba adalah...</h3>
        <label><input type="radio" name="soal5" value="A"> A. Kulit (ini jawabannya)</label><br>
        <label><input type="radio" name="soal5" value="B"> B. Mata</label><br>
        <label><input type="radio" name="soal5" value="C"> C. Lidah</label><br>
        <label><input type="radio" name="soal5" value="D"> D. Hidung</label>
      </div>
          
    <button type="submit" class="save-btn">Selesai</button>
  </form>
</div>

    <script src="{{ asset("js/script.js") }}"></script>
    {{-- bawah ini untuk sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>



