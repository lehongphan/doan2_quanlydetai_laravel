<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Hocvi extends Authenticatable

{
    use Notifiable;
    protected $primaryKey = 'maHV';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tenHV'
    ];
    public function getGiangVien()
    {
    return $this->hasMany('App\Giangvien', 'maHV','maHV');
    }
    
}
