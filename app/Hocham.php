<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Hocham extends Authenticatable

{
    use Notifiable;
    protected $primaryKey = 'maHH';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tenHH'
    ];
    public function getGiangVien()
    {
    return $this->hasMany('App\Giangvien', 'maHH','maHH');
    }
    
}
