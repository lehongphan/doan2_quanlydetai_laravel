<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Dangkydetai;
class Sinhvien extends Authenticatable
{
    
    use Notifiable;
    protected $primaryKey = "maSV";
    

    /**
     * @var string
     */
    protected $guard = 'sinhvien';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'maLop','hoLot','ten','ngaySinh','gioiTinh','email','queQuan', 'password',
    ];
    public function getLopChuyenNganh()
    {
        return $this->belongsTo('App\Lopchuyennganh', 'maLop','maLop');
    }
    public function getDangKyDeTai()
    {
    return $this->hasMany('App\Dangkydetai', 'maSV','maSV');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function yeuCauDangKy(){
    return Dangkydetai::where('trangThai','1' and '0')->get();
    }

    public function hasDangKy(Sinhvien $user){
    return (bool) $this->yeuCauDangKy()->where('maSV',$user->maSV)->count();
    }
}
