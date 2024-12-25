@extends('admin.admin_layout.admin_header')
{{-- untuk menampilkan header --}}

@section('content')
{{-- isi conten lanjutan dari header --}}

<h1 class="title">Jawaban Nilai IPS</h1>

<div class="table-container">
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
                <td>{{ $soal_ips->name_user }}</td>
                <td>{{ $soal_ips->value_result }}</td>
                <td> 
                    @if ($soal_ips->value_result >= 75)
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
<div class="table-container">
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
            <td style="color: {{ $soal_ips->{'soal_' . ($index + 1)} === $kunci ? 'black' : 'red' }}">
                {{ $soal_ips->{'soal_' . ($index + 1)} }}
            </td>
            <td>{{ $kunci }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

{{-- bawah ini menampilkan footer --}}
@include('admin.admin_layout.admin_footer')

{{-- end conten --}}
@endsection