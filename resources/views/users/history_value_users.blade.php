@extends('users.users_layout.users_header')
@section('content')
{{-- isi conten lanjutan dari header --}}

{{-- history nilai user --}}
<div class="history-value-user">
  <h2>Quiz App</h2>
  <h2>History nilai (nama user)</h2>
  <table>
    sini tabel
  </table>
  <a href="{{ route('halaman_user') }}"><button>Home</button></a>
</div>

{{-- bawah ini menampilkan footer --}}
@include('users.users_layout.users_footer')

{{-- end conten --}}
@endsection