@extends('users.users_layout.users_header')
@section('content')
{{-- isi conten lanjutan dari header --}}

{{-- history nilai user --}}
<div class="history-value-user">
  <h2>Quiz App</h2>
  <h2>History nilai {{ Auth::user()->name }}</h2>
  
  <table>
    <thead>
      <tr>
        <th>Mata Pelajaran</th>
        <th>Nilai</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($history_ips as $ips)
    <tr>
      <td>IPS</td>
      <td>{{ $history_ips->value_result ?? 'Data tidak tersedia' }}</td>
      <td>{{ $history_ips && $history_ips->value_result >= 75 ? 'Selamat! Anda lulus dengan nilai yang sangat baik.' : 'Mohon maaf, Anda belum lulus. Silakan coba lagi.' }}</td>
    </tr>
  @endforeach

  @foreach ($history_ipa as $ipa)
    <tr>
      <td>IPA</td>
      <td>{{ $history_ipa->value_result ?? 'Data tidak tersedia' }}</td>
    <td>{{ $history_ipa && $history_ipa->value_result >= 75 ? 'Selamat! Anda lulus dengan nilai yang sangat baik.' : 'Mohon maaf, Anda belum lulus. Silakan coba lagi.' }}</td>
    </tr>
  @endforeach
    </tbody>
  </table>
  <a href="{{ route('halaman_user') }}"><button>Home</button></a>
</div>

{{-- bawah ini menampilkan footer --}}
@include('users.users_layout.users_footer')

{{-- end conten --}}
@endsection