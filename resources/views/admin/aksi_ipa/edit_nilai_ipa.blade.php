@extends('admin.admin_layout.admin_header')
{{-- untuk menampilkan header --}}

@section('content')
{{-- isi conten lanjutan dari header --}}

<h1 class="title">Edit Jawaban Nilai IPA</h1>

<div class="table-container">
    <form action="{{ route('proses_edit_nilai_ujian_ipa', $soal_ipa->id) }}" method="POST">
        {{ csrf_field() }}
        @method('PUT')
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Nilai</th>
                    <th>Kategori</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $soal_ipa->name_user }}</td>
                    <td><input type="number" name="value_result" value="{{ $soal_ipa->value_result }}" style="width: 55px"></td>
                    <td> 
                        @if ($soal_ipa->value_result >= 75)
                            Lulus
                        @else
                            Tidak Lulus
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
</div>

{{-- untuk melihat jawaban ipa dari user --}}
<p></p>
        <table>
            <thead>
                <tr>
                    <th>Nomor Soal</th>
                    <th>Jawaban</th>
                    <th>Kunci Jawaban</th>
                </tr>
            </thead>
            <tbody>
                @php
                $kunciJawaban = ['B', 'C', 'C', 'B', 'B', 'A', 'C', 'B', 'C', 'A'];
                @endphp
                @foreach ($kunciJawaban as $index => $kunci)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        <input 
                            type="text" 
                            name="jawaban[{{ $index + 1 }}]" 
                            value="{{ $soal_ipa->{'soal_' . ($index + 1)} }}" 
                            style="color: {{ $soal_ipa->{'soal_' . ($index + 1)} === $kunci ? 'black' : 'red' }}; width:30px">
                    </td>
                    <td>{{ $kunci }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div style="text-align: center; margin-top: 20px;">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
    </form>



{{-- bawah ini menampilkan footer --}}
@include('admin.admin_layout.admin_footer')

{{-- end conten --}}
@endsection