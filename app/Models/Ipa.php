<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ipa extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'name_user',
        'soal_1',
        'soal_2',
        'soal_3',
        'soal_4',
        'soal_5',
        'soal_6',
        'soal_7',
        'soal_8',
        'soal_9',
        'soal_10',
        'value_result',
    ];

    public function infopassedfromipa()
    {
        return $this->hasMany(InfoPassed::class, 'id_soal', 'id');
    }
}
