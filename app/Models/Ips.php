<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ips extends Model
{
    use HasFactory;

    protected $table = 'soal_ips';

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



    //untuk mengambil data id dari user  
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    //untuk join data ke model InfoPassed
    public function infopassedfromips()
    {
        return $this->hasMany(InfoPassed::class, 'id_soal', 'id');
    }
}
