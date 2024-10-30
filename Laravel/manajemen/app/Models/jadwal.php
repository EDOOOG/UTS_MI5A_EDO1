<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'nama', 'tanggal','kelas','matakuliah'
    ];
}