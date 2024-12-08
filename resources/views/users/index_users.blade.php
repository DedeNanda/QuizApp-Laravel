@extends('users.users_layout.users_header')
{{-- untuk menampilkan header --}}

@section('content')
{{-- isi conten lanjutan dari header --}}

{{-- Piih quiz --}}
<div class="choose-quiz">
  <h2>Quiz App</h2>
  <h2>Silahkan pilih mata pelajaran</h2>
  <div class="button">
    <button data-bs-toggle="modal" data-bs-target="#quizModal_IPA" data-subject="IPA">IPA</button>
    <button data-bs-toggle="modal" data-bs-target="#quizModal_IPS" data-subject="IPS">IPS</button>
  </div>
  <a href="{{ route('history_value_users') }}"><button>Lihat history Nilai</button></a>
</div>

{{-- modal IPA --}}
<div class="modal fade" id="quizModal_IPA" tabindex="-1" aria-labelledby="quizModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content shadow-lg border-0 rounded-4">
      <div class="modal-header bg-primary text-white rounded-top-4">
        <h5 class="modal-title fw-bold" id="quizModalLabel">📚 Peraturan Quiz</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="fs-5 fw-semibold text-secondary" id="quiz-title">Mata Pelajaran: <span class="text-dark">IPA</span></p>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><strong>Jumlah Soal:</strong> 10</li>
          <li class="list-group-item"><strong>Nilai Minimum:</strong> 70</li>
          <li class="list-group-item"><strong>Durasi:</strong> 15 menit</li>
          <li class="list-group-item"><strong>Skor:</strong> 10 poin untuk setiap jawaban benar</li>
        </ul>
      </div>
      <div class="modal-footer d-flex justify-content-between">
        <button type="button" class="btn btn-outline-secondary px-4" data-bs-dismiss="modal">Tutup</button>
        <a href="{{ route('soal_ipa') }}" class="text-decoration-none">
          <button type="button" class="btn btn-primary px-4">Mulai Quiz</button>
        </a>
      </div>
    </div>
  </div>
</div>

{{-- modal IPS --}}
<div class="modal fade" id="quizModal_IPS" tabindex="-1" aria-labelledby="quizModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content shadow-lg border-0 rounded-4">
      <div class="modal-header bg-primary text-white rounded-top-4">
        <h5 class="modal-title fw-bold" id="quizModalLabel">📚 Peraturan Quiz</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="fs-5 fw-semibold text-secondary" id="quiz-title">Mata Pelajaran: <span class="text-dark">IPS</span></p>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><strong>Jumlah Soal:</strong> 10</li>
          <li class="list-group-item"><strong>Nilai Minimum:</strong> 70</li>
          <li class="list-group-item"><strong>Durasi:</strong> 15 menit</li>
          <li class="list-group-item"><strong>Skor:</strong> 10 poin untuk setiap jawaban benar</li>
        </ul>
      </div>
      <div class="modal-footer d-flex justify-content-between">
        <button type="button" class="btn btn-outline-secondary px-4" data-bs-dismiss="modal">Tutup</button>
        <a href="{{ route('soal_ips') }}" class="text-decoration-none">
          <button type="button" class="btn btn-primary px-4">Mulai Quiz</button>
        </a>
      </div>
    </div>
  </div>
</div>

{{-- bawah ini menampilkan footer --}}
@include('users.users_layout.users_footer')

{{-- end conten --}}
@endsection



