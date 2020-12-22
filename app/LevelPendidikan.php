<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelPendidikan extends Model
{
    protected $table='level_pendidikan';
    public $timestamps = false;

    public function penduduks(){
        return $this->hasMany('App\Penduduk');
    }
}
