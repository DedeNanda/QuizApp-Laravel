@extends('users.users_layout.users_header')
@section('content')
{{-- isi conten lanjutan dari header --}}

{{-- history nilai user --}}
<div class="history-value-user">
  <h2>Quiz App</h2>
  <h2>History nilai {{ Auth::user()->name }}</h2>
  
  <table class="styled-table">
    <thead>
      <tr>
        <th>Mata Pelajaran</th>
        <th>Nilai</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($history as $item)
      <tr>
        <td>{{ $item->mata_pelajaran }}</td>
        <td>{{ $item->value_result ?? 'Data tidak tersedia' }}</td>
        <td>
          {{ $item->value_result >= 75 
            ? 'Selamat! Anda lulus dengan nilai yang sangat baik.' 
            : 'Mohon maaf, Anda belum lulus. Silakan coba lagi.' 
          }}
        </td>
      </tr>
      @empty
      <div class="alert-history">
          Belum ada ujian.
      </div>
      
      @endforelse
    </tbody>
  </table>

  <!-- Pagination -->
  <div class="pagination-wrapper">
    {{ $history->links('pagination::bootstrap-5') }}
  </div>

  <a href="{{ route('halaman_user') }}"><button>Home</button></a>
</div>

{{-- bawah ini menampilkan footer --}}
@include('users.users_layout.users_footer')

{{-- end conten --}}
@endsection