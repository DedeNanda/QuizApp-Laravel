@extends('admin.admin_layout.admin_header')
{{-- untuk menampilkan header --}}

@section('content')
{{-- isi conten lanjutan dari header --}}

<h1 class="title">Tabel Data User</h1>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Photo</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @forelse($user as $index => $user)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                @if($user->photo)
                    <img src="{{ asset('uploads/photo_users/' . $user->photo) }}" alt="Photo" style="width: 100px; height: auto;">
                @else
                    Tidak ada photo
                @endif
                </td>
                <td>
                    {{-- untuk semua aksi pada folder aksi_user --}}
                    <a href="#" class="btn-aksi btn-view"><box-icon name='show' type='solid' color='#ffffff' ></box-icon></a>
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
</div>

{{-- bawah ini menampilkan footer --}}
@include('admin.admin_layout.admin_footer')

{{-- end conten --}}
@endsection