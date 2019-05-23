<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban1 extends Model
{
    protected $table = 'jawaban_1';

    //protected $var=>jawaban1.$i;
    // Fungsi ini untuk mengubah jawaban yang diinput dan disimpan ke database menjadi lowercase
    public function setJawabanAttribute($var)
    {
        return strtolower($var);
    }
}
