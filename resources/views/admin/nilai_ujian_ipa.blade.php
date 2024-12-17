@extends('admin.admin_layout.admin_header')
{{-- untuk menampilkan header --}}

@section('content')
{{-- isi conten lanjutan dari header --}}

<h1 class="title">Tabel Nilai Mapel IPA</h1>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nilai</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Ahmad</td>
                <td>85</td>
                <td>Lulus</td>
                <td>
                     <a href="#" class="btn-aksi btn-view">view</a>
                     <a href="#" class="btn-aksi btn-view">print</a>
                     <a href="#" class="btn-aksi btn-edit"><box-icon name='edit-alt' color='#ffffff' ></box-icon></a>
                     <a href="#" class="btn-aksi btn-delete"><box-icon name='trash-alt' type='solid' color='#ffffff' ></box-icon></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

{{-- bawah ini menampilkan footer --}}
@include('admin.admin_layout.admin_footer')

{{-- end conten --}}
@endsection