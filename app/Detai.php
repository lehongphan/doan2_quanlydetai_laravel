<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Detai extends Authenticatable
{
    protected $table = 'detais';
    protected $primaryKey = "maDeTai";
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
        'maGV','tenDeTai', 'thongTinDeTai',
    ];
     public function giangVien()
     {
     return $this->belongsTo('App\Giangvien', 'maGV','maGV');
     }
}
