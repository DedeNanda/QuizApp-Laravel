@extends('admin.admin_layout.admin_header')
{{-- untuk menampilkan header --}}

@section('content')
{{-- isi conten lanjutan dari header --}}

{{-- modal saat berhasil edit --}}
@if(session('success'))
    <div id="success-message-edit" data-message="{{ session('success') }}"></div>
@endif

<h1 class="title">Tabel Nilai Mapel IPA</h1>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nilai</th>
                <th>Kategori</th>
                <th>Waktu Ujian</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @forelse($soal_ipa as $index => $ipa)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $ipa->name_user }}</td>
                <td>{{ $ipa->value_result }}</td>
                <td> 
                    @if ($ipa->value_result >= 75)
                        Lulus
                    @else
                        Tidak Lulus
                    @endif
                </td>
                <td>{{ \Carbon\Carbon::parse($ipa->created_at)->translatedFormat('d F Y') }}</td>
                <td>
                    {{-- pada id="form-delete" itu terdapat pada js nanti di inisiasi" --}}
                    <form action="{{ route('destroy_nilai_ujian_ipa', $ipa->id) }}" method="POST" id="form-delete">

                    {{-- untuk semua aksi pada folder aksi_ipa --}}
                    <a href="{{ route('print_nilai_ujian_ipa_user', $ipa->id) }}" class="btn-aksi btn-print"><box-icon name='printer' type='solid' color='#ffffff' ></box-icon></a>
                    <a href="{{ route('view_nilai_ujian_ipa', $ipa->id) }}" class="btn-aksi btn-view"><box-icon name='show' type='solid' color='#ffffff' ></box-icon></a>
                    <a href="{{ route('edit_nilai_ujian_ipa', $ipa->id) }}" class="btn-aksi btn-edit"><box-icon name='edit-alt' color='#ffffff' ></box-icon></a>
                    {{-- dibawah ini untuk delete pada aksi ipa --}}

                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn-aksi btn-delete" id="delete-button">
                        <box-icon name='trash-alt' type='solid' color='#ffffff'></box-icon>
                    </button>
                    </form>
                </td>
            </tr>
            @empty
            <div class="alert-history">
                Belum ada ujian Ipa.
            </div>
        @endforelse
        </tbody>
    </table>
    <div class="pagination justify-content-end">
        {{-- buat $soal_ipa karena dia tidak masuk forelse --}}
        {{ $soal_ipa->links('pagination::bootstrap-4') }}
    </div>
</div>

{{-- bawah ini menampilkan footer --}}
@include('admin.admin_layout.admin_footer')

{{-- end conten --}}
@endsection