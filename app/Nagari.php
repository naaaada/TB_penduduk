<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nagari extends Model
{
    protected $table= 'nagaris';
    public $timestamps = false;

    public function jorongs(){
        return $this->hasMany('App\Jorong');
    }
    
}
