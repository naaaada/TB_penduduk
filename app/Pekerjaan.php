<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    protected $table='pekerjaan';
    public $timestamps = false;

    public function pekerjaans(){
        return $this->hasMany('App\Penduduk');
    }
}
