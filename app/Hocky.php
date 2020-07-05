<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Hocky extends Authenticatable
{
    protected $table = 'hockys';
    protected $primaryKey = "maHK";
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
        'hocKy', 
    ];
    public function getHocKy()
     {
     return $this->hasMany('App\Detai', 'maNK','maNK');
     }
     public function getDangKyDeTai()
     {
     return $this->hasMany('App\Dangkydetai', 'maNK','maNK');
     }
}

