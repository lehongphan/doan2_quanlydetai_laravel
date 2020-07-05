<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Nienkhoa extends Authenticatable
{
    protected $table = 'nienkhoas';
    protected $primaryKey = "maNK";
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
        'nienKhoa', 
    ];
    public function getNienKhoa()
     {
     return $this->hasMany('App\Detai', 'maNK','maNK');
     }
     public function getDangKyDeTai()
     {
     return $this->hasMany('App\Dangkydetai', 'maNK','maNK');
     }
}

