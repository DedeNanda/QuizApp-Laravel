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
<div class="choose-soal">
  <h1>Soal IPA</h1>

    <form action="{{ route('proses_selesai_ujian_soal_ipa') }}" method="POST">
      {{ csrf_field() }}

      <!-- Soal 1 -->
      <div class="soal">
        <h3>1. Proses tumbuhan hijau mengubah karbon dioksida dan air menjadi makanan dengan bantuan cahaya matahari disebut...</h3>
        <label><input type="radio" name="soal_1" value="A"> A. Respirasi</label><br>
        <label><input type="radio" name="soal_1" value="B"> B. Fotosintesis</label><br>
        <label><input type="radio" name="soal_1" value="C"> C. Fermentasi</label><br>
        <label><input type="radio" name="soal_1" value="D"> D. Transpirasi</label>
      </div>
      
      <!-- Soal 2 -->
      <div class="soal">
        <h3>2. Benda yang tidak dapat menghantarkan panas disebut...</h3>
        <label><input type="radio" name="soal_2" value="A"> A. Konduktor</label><br>
        <label><input type="radio" name="soal_2" value="B"> B. Semikonduktor</label><br>
        <label><input type="radio" name="soal_2" value="C"> C. Isolator</label><br>
        <label><input type="radio" name="soal_2" value="D"> D. Elektromagnet</label>
      </div>

      <!-- Soal 3 -->
      <div class="soal">
        <h3>3. Sumber energi utama bagi kehidupan di bumi adalah...</h3>
        <label><input type="radio" name="soal_3" value="A"> A. Air</label><br>
        <label><input type="radio" name="soal_3" value="B"> B. Angin</label><br>
        <label><input type="radio" name="soal_3" value="C"> C. Matahari</label><br>
        <label><input type="radio" name="soal_3" value="D"> D. Minyak bumi</label>
      </div>

      <!-- Soal 4 -->
      <div class="soal">
        <h3>4. Hewan berikut yang melakukan adaptasi dengan cara mimikri adalah...</h3>
        <label><input type="radio" name="soal_4" value="A"> A. Cicak</label><br>
        <label><input type="radio" name="soal_4" value="B"> B. Bunglon </label><br>
        <label><input type="radio" name="soal_4" value="C"> C. Kelelawar</label><br>
        <label><input type="radio" name="soal_4" value="D"> D. Harimau</label>
      </div>

      <!-- Soal 5 -->
      <div class="soal">
        <h3>5. Perubahan wujud air menjadi es disebut...</h3>
        <label><input type="radio" name="soal_5" value="A"> A. Menguap</label><br>
        <label><input type="radio" name="soal_5" value="B"> B. Membeku </label><br>
        <label><input type="radio" name="soal_5" value="C"> C. Mengembun</label><br>
        <label><input type="radio" name="soal_5" value="D"> D. Menyublim</label>
      </div>

      <!-- Soal 6 -->
      <div class="soal">
        <h3>6. Bagian tumbuhan yang berfungsi menyerap air dan mineral dari tanah adalah...</h3>
        <label><input type="radio" name="soal_6" value="A"> A. Akar </label><br>
        <label><input type="radio" name="soal_6" value="B"> B. Batang</label><br>
        <label><input type="radio" name="soal_6" value="C"> C. Daun</label><br>
        <label><input type="radio" name="soal_6" value="D"> D. Bunga</label>
      </div>

      <!-- Soal 7 -->
      <div class="soal">
        <h3>7. Planet terdekat dari matahari adalah...</h3>
        <label><input type="radio" name="soal_7" value="A"> A. Venus</label><br>
        <label><input type="radio" name="soal_7" value="B"> B. Mars</label><br>
        <label><input type="radio" name="soal_7" value="C"> C. Merkurius</label><br>
        <label><input type="radio" name="soal_7" value="D"> D. Bumi</label>
      </div>

      <!-- Soal 8 -->
      <div class="soal">
        <h3>8. Gas yang diperlukan tumbuhan untuk fotosintesis adalah...</h3>
        <label><input type="radio" name="soal_8" value="A"> A. Oksigen</label><br>
        <label><input type="radio" name="soal_8" value="B"> B. Karbon dioksida</label><br>
        <label><input type="radio" name="soal_8" value="C"> C. Nitrogen</label><br>
        <label><input type="radio" name="soal_8" value="D"> D. Hidrogen</label>
      </div>

      <!-- Soal 9 -->
      <div class="soal">
        <h3>9. Gaya gravitasi bumi menyebabkan benda yang dilempar ke atas akan...</h3>
        <label><input type="radio" name="soal_9" value="A"> A. Tetap di udara</label><br>
        <label><input type="radio" name="soal_9" value="B"> B. Bergerak ke samping</label><br>
        <label><input type="radio" name="soal_9" value="C"> C. Jatuh ke bawah</label><br>
        <label><input type="radio" name="soal_9" value="D"> D. Melayang di udara</label>
      </div>

      <!-- Soal 10 -->
      <div class="soal">
        <h3>10. Bagian tubuh manusia yang berfungsi sebagai alat peraba adalah...</h3>
        <label><input type="radio" name="soal_10" value="A"> A. Kulit</label><br>
        <label><input type="radio" name="soal_10" value="B"> B. Mata</label><br>
        <label><input type="radio" name="soal_10" value="C"> C. Lidah</label><br>
        <label><input type="radio" name="soal_10" value="D"> D. Hidung</label>
      </div>
          
    <button type="submit" class="save-btn">Selesai</button>
  </form>

</div>

    <script src="{{ asset("js/script.js") }}"></script>
    {{-- bawah ini untuk sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>



