<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Giangvien extends Authenticatable
{
    protected $table = 'giangviens';
    protected $primaryKey = "maGV";
    use Notifiable;
    

    /**
     * @var string
     */
    protected $guard = 'giangvien';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'maKhoa','maHH','maHV','hoLot','ten','ngaySinh','gioiTinh','email','queQuan','password',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function deTai()
    {
    return $this->hasMany('App\Detai', 'maGV','maGV');
    }
    public function getHocHam()
    {
    return $this->belongsTo('App\Hocham', 'maHH','maHH');
    }
    public function getHocVi()
    {
    return $this->belongsTo('App\Hocvi', 'maHV','maHV');
    }
    public function getKhoa()
    {
    return $this->belongsTo('App\Khoa', 'maKhoa','maKhoa');
    }
}
