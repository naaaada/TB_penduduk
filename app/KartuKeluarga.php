<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuKeluarga extends Model
{
    protected $table='kartu_keluargas';
    public $timestamps = false;

    public function jorongs(){
        return $this->belongsTo('App\Jorong', 'jorong_id');
    }
    public function penduduks(){
        return $this->hasMany('App\Penduduk');
    }

}
