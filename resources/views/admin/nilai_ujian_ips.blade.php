@extends('admin.admin_layout.admin_header')
{{-- untuk menampilkan header --}}

@section('content')
{{-- isi conten lanjutan dari header --}}

<h1 class="title">Tabel Nilai Mapel IPS</h1>

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
                    {{-- untuk semua aksi pada folder aksi_ips --}}
                    <a href="#" class="btn-aksi btn-print"><box-icon name='printer' type='solid' color='#ffffff' ></box-icon></a>
                    <a href="{{ route('view_nilai_ujian_ips', $ips->id) }}" class="btn-aksi btn-view"><box-icon name='show' type='solid' color='#ffffff' ></box-icon></a>
                    <a href="#" class="btn-aksi btn-edit"><box-icon name='edit-alt' color='#ffffff' ></box-icon></a>
                    <a href="#" class="btn-aksi btn-delete"><box-icon name='trash-alt' type='solid' color='#ffffff' ></box-icon></a>
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