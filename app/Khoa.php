<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Khoa extends Authenticatable

{
    use Notifiable;
    protected $primaryKey = 'maKhoa';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tenKhoa'
    ];
    public function getGiangVien()
    {
    return $this->hasMany('App\Giangvien', 'maKhoa','maKhoa');
    }
    public function getKhoa()
    {
    return $this->hasMany('App\Nganh', 'maKhoa','maKhoa');
    }
    
}
