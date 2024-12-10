@extends('users.users_layout.users_header')
@section('content')
{{-- isi conten lanjutan dari header --}}


{{-- untuk apakah yakin mau selesai --}}
@if(session('finish'))
<div id="exam-finish-message" data-message="{{ session('finish') }}"></div>
@endif

{{-- hasil setelah ujian --}}
<div class="result-value">
  <h2>Quiz App</h2>
  <h2>atas nama (sini nama user) mendapatkan nilai</h2>
  <h4>disini letak nilai</h4>
  <p>informasi status nilai </p>
  <a href="{{ route('halaman_user') }}"><button>Home</button></a>
  {{-- pada bagian tombol home di buat dengan menggunakan form untuk mengirim nilai lagi ke database --}}
</div>

{{-- bawah ini menampilkan footer --}}
@include('users.users_layout.users_footer')

{{-- end conten --}}
@endsection