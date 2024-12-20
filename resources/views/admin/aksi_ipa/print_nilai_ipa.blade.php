<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nilai Ujian Ipa</title>
    <link href="{{ public_path('css/laporan_individu.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    {{-- Header --}}
    <div class="header">
        <h1>Hasil Ujian IPA</h1>
        <p>Nama : {{ $soal_ipa->name_user }}</p>
        <p>Nilai : {{ $soal_ipa->value_result }}</p>
        <p>Kategori : {{ $soal_ipa->value_result >= 75 ? 'Lulus' : 'Tidak Lulus' }}</p>
        <p>Waktu Ujian : {{ \Carbon\Carbon::parse($soal_ipa->created_at)->translatedFormat('d F Y') }}</p>
    </div>
    {{-- Konten --}}
    <div class="content">
        <!-- Soal 1 -->
      <div class="soal">
        <h3>1. Proses tumbuhan hijau mengubah karbon dioksida dan air menjadi makanan dengan bantuan cahaya matahari disebut...</h3>
        <label> A. Respirasi</label><br>
        <label> B. Fotosintesis</label><br>
        <label> C. Fermentasi</label><br>
        <label> D. Transpirasi</label>
        <p>Piih Jawaban {{ $soal_ipa->soal_1 }} <span>Kunci Jawaban : B</span></p>
      </div>
      
      <!-- Soal 2 -->
      <div class="soal">
        <h3>2. Benda yang tidak dapat menghantarkan panas disebut...</h3>
        <label> A. Konduktor</label><br>
        <label> B. Semikonduktor</label><br>
        <label> C. Isolator</label><br>
        <label> D. Elektromagnet</label>
        <p>Piih Jawaban {{ $soal_ipa->soal_2 }} <span>Kunci Jawaban : C</span></p>
      </div>

      <!-- Soal 3 -->
      <div class="soal">
        <h3>3. Sumber energi utama bagi kehidupan di bumi adalah...</h3>
        <label> A. Air</label><br>
        <label> B. Angin</label><br>
        <label> C. Matahari</label><br>
        <label> D. Minyak bumi</label>
        <p>Piih Jawaban {{ $soal_ipa->soal_3 }} <span>Kunci Jawaban : C</span></p>
      </div>

      <!-- Soal 4 -->
      <div class="soal">
        <h3>4. Hewan berikut yang melakukan adaptasi dengan cara mimikri adalah...</h3>
        <label> A. Cicak</label><br>
        <label> B. Bunglon </label><br>
        <label> C. Kelelawar</label><br>
        <label> D. Harimau</label>
        <p>Piih Jawaban {{ $soal_ipa->soal_4 }} <span>Kunci Jawaban : B</span></p>
      </div>

      <!-- Soal 5 -->
      <div class="soal">
        <h3>5. Perubahan wujud air menjadi es disebut...</h3>
        <label> A. Menguap</label><br>
        <label> B. Membeku </label><br>
        <label> C. Mengembun</label><br>
        <label> D. Menyublim</label>
        <p>Piih Jawaban {{ $soal_ipa->soal_5 }} <span>Kunci Jawaban : B</span></p>
      </div>

      <!-- Soal 6 -->
      <div class="soal">
        <h3>6. Bagian tumbuhan yang berfungsi menyerap air dan mineral dari tanah adalah...</h3>
        <label> A. Akar </label><br>
        <label> B. Batang</label><br>
        <label> C. Daun</label><br>
        <label> D. Bunga</label>
        <p>Piih Jawaban {{ $soal_ipa->soal_6 }} <span>Kunci Jawaban : A</span></p>
      </div>

      <!-- Soal 7 -->
      <div class="soal">
        <h3>7. Planet terdekat dari matahari adalah...</h3>
        <label> A. Venus</label><br>
        <label> B. Mars</label><br>
        <label> C. Merkurius</label><br>
        <label> D. Bumi</label>
        <p>Piih Jawaban {{ $soal_ipa->soal_7 }} <span>Kunci Jawaban : C</span></p>
      </div>

      <!-- Soal 8 -->
      <div class="soal">
        <h3>8. Gas yang diperlukan tumbuhan untuk fotosintesis adalah...</h3>
        <label> A. Oksigen</label><br>
        <label> B. Karbon dioksida</label><br>
        <label> C. Nitrogen</label><br>
        <label> D. Hidrogen</label>
        <p>Piih Jawaban {{ $soal_ipa->soal_8 }} <span>Kunci Jawaban : B</span></p>
      </div>

      <!-- Soal 9 -->
      <div class="soal">
        <h3>9. Gaya gravitasi bumi menyebabkan benda yang dilempar ke atas akan...</h3>
        <label> A. Tetap di udara</label><br>
        <label> B. Bergerak ke samping</label><br>
        <label> C. Jatuh ke bawah</label><br>
        <label> D. Melayang di udara</label>
        <p>Piih Jawaban {{ $soal_ipa->soal_9 }} <span>Kunci Jawaban : C</span></p>
      </div>

      <!-- Soal 10 -->
      <div class="soal">
        <h3>10. Bagian tubuh manusia yang berfungsi sebagai alat peraba adalah...</h3>
        <label> A. Kulit</label><br>
        <label> B. Mata</label><br>
        <label> C. Lidah</label><br>
        <label> D. Hidung</label>
        <p>Piih Jawaban {{ $soal_ipa->soal_10 }} <span>Kunci Jawaban : A</span></p>
      </div>
    </div>

    {{-- Footer --}}
    <div class="footer">
        <div class="signature">
            <div>
                <p>{{ $soal_ipa->name_user }}</p>
                <p>Peserta</p>
            </div>
            <div>
                <p>{{ Auth::user()->name }}</p>
                <p>Penyelenggara</p>
            </div>
        </div>
    </div>
</body>
</html>