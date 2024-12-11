@extends('users.users_layout.users_header')
@section('content')
{{-- isi conten lanjutan dari header --}}


{{-- untuk apakah yakin mau selesai --}}
@if(session('finish'))
<div id="exam-finish-message" data-message="{{ session('finish') }}"></div>
@endif

{{-- hasil setelah ujian --}}
  <div class="result-value">
    <h2>Quiz App Pelajaran IPA</h2>
    <h2>Atas nama <span>{{  $result->name_user }}</span> mendapatkan nilai</h2>
    <h4>{{ $result->value_result }}</h4>
    <p>{{ $result->value_result >= 75 ? 'Selamat! Anda lulus dengan nilai yang sangat baik.' : 'Mohon maaf, Anda belum lulus. Silakan coba lagi.' }}</p>
    <a href="{{ route('halaman_user') }}">
        <button>Home</button>
    </a>
  </div>

{{-- bawah ini menampilkan footer --}}
@include('users.users_layout.users_footer')

{{-- end conten --}}
@endsection