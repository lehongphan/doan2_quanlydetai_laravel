<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Dangkydetai;
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
        'maGV','tenDetai','maNK','maHK','maDA', 'thongTinDeTai','thoiGian',
        'soSVTT',
        'congNghe',
        'moiTruong',
        'loaiDT',
    ];
     public function giangVien()
     {
     return $this->belongsTo('App\Giangvien', 'maGV','maGV');
     }
     public function getDeTai()
    {
    return $this->hasMany('App\Dangkydetai', 'maDeTai','maDeTai');
    }
    public function getNienKhoa()
     {
     return $this->belongsTo('App\Nienkhoa', 'maNK','maNK');
     }
     public function getHocKy()
     {
     return $this->belongsTo('App\Hocky', 'maHK','maHK');
     }
     public function getDoan()
     {
     return $this->belongsTo('App\Doan', 'maDA','maDA');
     }
}

