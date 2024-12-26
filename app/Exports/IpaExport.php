<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;


class IpaExport implements FromCollection, WithHeadings, WithMapping, WithStyles
{
    /**
     * @return \Illuminate\Support\Collection
     */

    private $data; // Properti untuk menyimpan data dari model Ipa

    public function __construct($data) // Konstruktor menerima data
    {
        $this->data = $data;
    }

    //panggil model pada IPA
    public function collection()
    {
        return $this->data; // Mengembalikan data untuk diekspor
    }

    /**
     * Menentukan header kolom.
     */
    public function headings(): array
    {
        return [
            'No',         // Kolom untuk nomor
            'Nama User',
            'Soal 1',
            'Soal 2',
            'Soal 3',
            'Soal 4',
            'Soal 5',
            'Soal 6',
            'Soal 7',
            'Soal 8',
            'Soal 9',
            'Soal 10',
            'Nilai',
            'Kategori',
            'Tanggal Dibuat',
        ];
    }

    /**
     * Memformat data setiap baris.
     */
    public function map($soal_ipa): array
    {
        static $number = 0; // Variabel untuk menghitung nomor

        //menentukan kategori kelulusan pada ipa
        $kategori = $soal_ipa->value_result >= 75 ? 'lulus' : 'Tidak Lulus';

        //dibawah ini database pada ipa
        return [
            ++$number,
            $soal_ipa->name_user,
            $soal_ipa->soal_1,
            $soal_ipa->soal_2,
            $soal_ipa->soal_3,
            $soal_ipa->soal_4,
            $soal_ipa->soal_5,
            $soal_ipa->soal_6,
            $soal_ipa->soal_7,
            $soal_ipa->soal_8,
            $soal_ipa->soal_9,
            $soal_ipa->soal_10,
            $soal_ipa->value_result,
            $kategori,
            $soal_ipa->created_at->format('d-m-Y'), // Format tanggal
        ];
    }

    /**
     * Menentukan styling umum.
     */
    public function styles(Worksheet $sheet)
    {
        return [
            // Header (baris pertama) bold dan tengah
            1 => [
                'font' => ['bold' => true],
                'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER],
            ],
            // Ukuran kolom otomatis
            'A' => ['width' => 5],  // Nomor
            'B' => ['width' => 50], // Nama User
            'C' => ['width' => 4], // Soal 1
            'D' => ['width' => 4], // Soal 2
            'E' => ['width' => 4], // Soal 3
            'F' => ['width' => 4], // Soal 4
            'G' => ['width' => 4], // Soal 5
            'H' => ['width' => 4], // Soal 6
            'I' => ['width' => 4], // Soal 7
            'J' => ['width' => 4], // Soal 8
            'K' => ['width' => 4], // Soal 9
            'L' => ['width' => 4], // Soal 10
            'M' => ['width' => 15], // Kategori nilai
            'N' => ['width' => 10], // Nilai
            'O' => ['width' => 30], // Tanggal Dibuat
        ];
    }
}
