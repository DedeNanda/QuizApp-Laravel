<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Download PDF Nilai Ipa</title>
    <link href="{{ public_path('css/laporan_download.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    {{-- Tabel--}}
    <h2>Data Nilai Ujian IPA</h2>
    <p> 
        @php
        use Carbon\Carbon;
        @endphp
        {{ $tanggal_mulai ? Carbon::parse($tanggal_mulai)->translatedFormat('d F Y') : '' }} 
        sampai 
        {{ $tanggal_selesai ? Carbon::parse($tanggal_selesai)->translatedFormat('d F Y') : '' }}
    </p>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Soal 1</th>
                    <th>Soal 2</th>
                    <th>Soal 3</th>
                    <th>Soal 4</th>
                    <th>Soal 5</th>
                    <th>Soal 6</th>
                    <th>Soal 7</th>
                    <th>Soal 8</th>
                    <th>Soal 9</th>
                    <th>Soal 10</th>
                    <th>Nilai</th>
                    <th>Kategori</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($soal_ipa as $index => $ipa)
                <tr>
                    <td>{{$index + 1 }}</td>
                    <td>{{ $ipa->name_user }}</td>
                    <td>{{ $ipa->soal_1 }}</td>
                    <td>{{ $ipa->soal_2 }}</td>
                    <td>{{ $ipa->soal_3 }}</td>
                    <td>{{ $ipa->soal_4 }}</td>
                    <td>{{ $ipa->soal_5 }}</td>
                    <td>{{ $ipa->soal_6 }}</td>
                    <td>{{ $ipa->soal_7 }}</td>
                    <td>{{ $ipa->soal_8 }}</td>
                    <td>{{ $ipa->soal_9 }}</td>
                    <td>{{ $ipa->soal_10 }}</td>
                    <td>{{ $ipa->value_result }}</td>
                    <td> 
                        @if ($ipa->value_result >= 75)
                            Lulus
                        @else
                            Tidak Lulus
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Footer --}}
    <div class="footer">
        <table>
            <tr>
                <td class="sign-left">
                    <p></p>
                    <p>Wali Kelas</p>
                    <p></p>
                    <br>
                    <br>
                    <p class="name">John Dea</p>
                </td>
                <td class="sign-right">
                    <p></p>
                    <p>City, {{ now()->format('d F Y') }}</p>
                    <p>Penyelenggara</p>
                    <br>
                    <br>
                    <p class="name">{{ Auth::user()->name }}</p>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>