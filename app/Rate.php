<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $fillable = ['percentage','user_id'];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
