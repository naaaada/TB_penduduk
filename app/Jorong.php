<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jorong extends Model
{
    protected $table='jorongs';
    public $timestamps = false;

    public function nagaris(){
        return $this->belongsTo('App\Nagari', 'nagari_id');
    }
    public function kartu_keluargas(){
        return $this->hasMany('App\KartuKeluarga');
    }

}
