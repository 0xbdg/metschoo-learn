<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public const KELAS = [
        'X' => 'X',
        'XI' => 'XI',
        'XII' => 'XII'
    ];

    public const JURUSAN = [
        'PPLG'=>'PPLG',
        'DKV'=>'DKV',
        'PERHOTELAN'=>'PERHOTELAN',
        'KULINER'=>'KULINER',
        'AKUNTANSI'=>'AKUNTANSI'
    ];

    
}
