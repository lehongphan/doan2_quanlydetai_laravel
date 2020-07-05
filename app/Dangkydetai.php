<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Sinhvien;
use App\Detai;
class Dangkydetai extends Authenticatable
{
    protected $table = 'dangkydetais';
    protected $primaryKey = "maDangKyDT";
    use Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'maDeTai','maGV','maSV','maNK','maHK','maDA','trangThai'
    ];
    public function getSinhVien()
    {
    return $this->belongsTo('App\Sinhvien', 'maSV','maSV');
    }
    public function getDeTai()
    {
    return $this->belongsTo('App\Detai', 'maDeTai','maDeTai');
    }
    public function class()
    {
        return $this->belongsTo('App\Hocky', 'maHK');
    }
    public function getDoan()
     {
     return $this->belongsTo('App\Doan', 'maDA','maDA');
     }
     public function getNienKhoa()
     {
     return $this->belongsTo('App\Nienkhoa', 'maNK','maNK');
     }
     public function getHocKy()
     {
     return $this->belongsTo('App\Hocky', 'maHK','maHK');
     }
}
