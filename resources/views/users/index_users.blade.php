@extends('users.users_layout.users_header')
{{-- untuk menampilkan header --}}

@section('content')
{{-- isi conten lanjutan dari header --}}

{{-- Piih quiz --}}
<div class="choose-quiz">
  <h2>Quiz App</h2>
  <h2>Silahkan pilih mata pelajaran</h2>
  <div class="button">
    <button data-bs-toggle="modal" data-bs-target="#quizModal" data-subject="IPA">IPA</button>
    <button data-bs-toggle="modal" data-bs-target="#quizModal" data-subject="IPS">IPS</button>
  </div>
  <a href="{{ route('history_value_users') }}"><button>Lihat history Nilai</button></a>
</div>

{{-- modal  --}}
<div class="modal fade" id="quizModal" tabindex="-1" aria-labelledby="quizModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="quizModalLabel">Peraturan Quiz</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p id="quiz-title">Mata Pelajaran: <span id="subject-name"></span></p>
        <ul>
          <li><strong>Jumlah Soal:</strong> 10</li>
          <li><strong>Nilai Minimum:</strong> 70</li>
          <li><strong>Durasi:</strong> 15 menit</li>
          <li><strong>Skor:</strong> 10 poin untuk setiap jawaban benar</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" onclick="startQuiz()">Mulai Quiz</button>
      </div>
    </div>
  </div>
</div>

{{-- bawah ini menampilkan footer --}}
@include('users.users_layout.users_footer')

{{-- end conten --}}
@endsection



