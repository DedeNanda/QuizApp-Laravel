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

{{-- untuk melihat jawaban ips dari user --}}
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
            <tr>
                <td>1</td>
                <td>{{ $soal_ips->soal_1}}</td>
                <td>B</td>
            </tr>
            <tr>
                <td>2</td>
                <td>{{ $soal_ips->soal_2}}</td>
                <td>C</td>
            </tr>
            <tr>
                <td>3</td>
                <td>{{ $soal_ips->soal_3}}</td>
                <td>C</td>
            </tr>
            <tr>
                <td>4</td>
                <td>{{ $soal_ips->soal_4}}</td>
                <td>B</td>
            </tr>
            <tr>
                <td>5</td>
                <td>{{ $soal_ips->soal_5}}</td>
                <td>B</td>
            </tr>
            <tr>
                <td>6</td>
                <td>{{ $soal_ips->soal_6}}</td>
                <td>A</td>
            </tr>
            <tr>
                <td>7</td>
                <td>{{ $soal_ips->soal_7}}</td>
                <td>C</td>
            </tr>
            <tr>
                <td>8</td>
                <td>{{ $soal_ips->soal_8}}</td>
                <td>B</td>
            </tr>
            <tr>
                <td>9</td>
                <td>{{ $soal_ips->soal_9}}</td>
                <td>C</td>
            </tr>
            <tr>
                <td>10</td>
                <td>{{ $soal_ips->soal_10}}</td>
                <td>A</td>
            </tr>
        </tbody>
    </table>
</div>

{{-- bawah ini menampilkan footer --}}
@include('admin.admin_layout.admin_footer')

{{-- end conten --}}
@endsection