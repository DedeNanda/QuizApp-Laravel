@extends('users.users_layout.users_header')
{{-- untuk menampilkan header --}}

@section('content')
{{-- isi conten lanjutan dari header --}}

{{-- Piihan gana IPS --}}
<div class="soal-ips">
  <h1>pilihan ganda ips</h1>
  <button onclick="">Selesai</button>
</div>



{{-- bawah ini menampilkan footer --}}
@include('users.users_layout.users_footer')

{{-- end conten --}}
@endsection



