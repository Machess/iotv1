<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fleet extends Model
{
    protected $table = 'fleets';

    public $primaryKey = 'id';

    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function fleets(){
        return $this->hasMany('App\Tracker');
    }

}
