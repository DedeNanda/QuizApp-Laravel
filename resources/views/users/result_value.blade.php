@extends('users.users_layout.users_header')
@section('content')
{{-- isi conten lanjutan dari header --}}

{{-- hasil setelah ujian --}}
<div class="result-value">
  <h2>Quiz App</h2>
  <h2>atas nama (sini nama user) mendapatkan nilai</h2>
  <h4>disini letak nilai</h4>
  <p>informasi status nilai </p>
  <a href="{{ route('halaman_user') }}"><button>Home</button></a>
</div>

{{-- bawah ini menampilkan footer --}}
@include('users.users_layout.users_footer')

{{-- end conten --}}
@endsection