@extends('users.users_layout.users_header')
{{-- untuk menampilkan header --}}

@section('content')
{{-- isi conten lanjutan dari header --}}

{{-- Pilihan ganda IPA --}}
<div class="soal-ipa">
  <h1>ini soal IPA</h1>
  <button onclick="">Selesai</button>
</div>



{{-- bawah ini menampilkan footer --}}
@include('users.users_layout.users_footer')

{{-- end conten --}}
@endsection



