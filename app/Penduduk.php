<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table='penduduks';
    public $timestamps = false;

    public function kartu_keluargas(){
        return $this->belongsTo('App\KartuKeluarga','kartu_keluarga_id','id');
    }
    public function kartu_kewarganegaraans(){
        return $this->belongsTo('App\Kewarganegaraan','kewarganegaraan_id','id');
    }
    public function level_pendidikans(){
        return $this->belongsTo('App\LevelPendidikan','level_pendikan_id','id');
    }
    public function pekerjaans(){
        return $this->belongsTo('App\Pekerjaan','pekerjaan_id','id');
    }
}
