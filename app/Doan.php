<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Doan extends Authenticatable
{
    protected $table = 'doans';
    protected $primaryKey = "maDA";
    use Notifiable;
    

    /**
     * @var string
     */

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'doAn', 
    ];
    public function getDoAn()
     {
     return $this->hasMany('App\Detai', 'maDA','maDA');
     }
     public function getDangKyDeTai()
     {
     return $this->hasMany('App\Dangkydetai', 'maDA','maDA');
     }
}

