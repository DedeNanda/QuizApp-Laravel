@extends('admin.admin_layout.admin_header')
{{-- untuk menampilkan header --}}

@section('content')
{{-- isi conten lanjutan dari header --}}

{{-- modal saat berhasil edit --}}
@if(session('success'))
    <div id="success-message-edit" data-message="{{ session('success') }}"></div>
@endif

{{-- bagian downlaod pdf --}}
<div class="download-pdf-excel">
    <a target="_blank" href="{{ route('downloadPDF_nilai_ips', [
    'name' => Request::get('name'),
    'tanggal_mulai' => Request::get('tanggal_mulai'),
    'tanggal_selesai' => Request::get('tanggal_selesai'),
    ]) }}" class="btn-download btn-download-pdf">Download PDF<box-icon name='download' type='solid' color='#ffffff'></box-icon></a>

    <a target="_blank" href="{{ route('downloadExcel_nilai_ipa', [
    'name' => Request::get('name'),
    'tanggal_mulai' => Request::get('tanggal_mulai'),
    'tanggal_selesai' => Request::get('tanggal_selesai'),
    ]) }}" class="btn-download btn-download-excel">Download Excel<box-icon name='download' type='solid' color='#ffffff'></box-icon></a>
</div>

<h1 class="title">Tabel Nilai Mapel IPS</h1>

{{-- bagian search --}}
<div class="search-container">
    <form method="GET" action="{{ route('nilai_ujian_ips') }}" id="search-form">
        <div class="form-group">
            <input type="date" id="tanggal_mulai" name="tanggal_mulai" value="{{ request('tanggal_mulai') }}">
            <label class="text-sd">sd</label>
            <input type="date" id="tanggal_selesai" name="tanggal_selesai" value="{{ request('tanggal_selesai') }}">
            <input type="text" id="name" name="name" placeholder="Cari Nama" value="{{ request('name') }}">
            <button type="submit" class="btn-search">Cari</button>
            <button type="reset" class="btn-search" id="reset-button">Reset</button>
        </div>
    </form>
</div>

{{-- bagian tabel untuk nilai ipa --}}
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
        @forelse($soal_ips as $index => $ips)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $ips->name_user }}</td>
                <td>{{ $ips->value_result }}</td>
                <td> 
                    @if ($ips->value_result >= 75)
                        Lulus
                    @else
                        Tidak Lulus
                    @endif
                </td>
                <td>{{ \Carbon\Carbon::parse($ips->created_at)->translatedFormat('d F Y') }}</td>
                <td>
                    {{-- pada id="form-delete" itu terdapat pada js nanti di inisiasi" --}}
                    <form action="{{ route('destroy_nilai_ujian_ips', $ips->id) }}" method="POST" id="form-delete-{{ $ips->id }}">

                    {{-- untuk semua aksi pada folder aksi_ips --}}
                    <a href="#" class="btn-aksi btn-print"><box-icon name='printer' type='solid' color='#ffffff' ></box-icon></a>
                    <a href="{{ route('view_nilai_ujian_ips', $ips->id) }}" class="btn-aksi btn-view"><box-icon name='show' type='solid' color='#ffffff' ></box-icon></a>
                    <a href="{{ route('edit_nilai_ujian_ips', $ips->id) }}" class="btn-aksi btn-edit"><box-icon name='edit-alt' color='#ffffff' ></box-icon></a>
                    {{-- dibawah ini untuk delete pada aksi ipa --}}

                    @csrf
                    @method('DELETE')
                    {{-- dibawah ini menggunakan sweet alert dan cek pada controller dan script.js --}}
                    <button type="button" class="btn-aksi btn-delete" data-id="{{ $ips->id }}">
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
        {{-- buat $soal_ips karena dia tidak masuk forelse --}}
        {{ $soal_ips->links('pagination::bootstrap-4') }}
    </div>
</div>

{{-- bawah ini menampilkan footer --}}
@include('admin.admin_layout.admin_footer')

{{-- end conten --}}
@endsection