<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Sinhvien;
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
        'maDeTai','maGV','maSV','trangThai'
    ];
    public function getSinhVien()
    {
    return $this->belongsTo('App\Sinhvien', 'maSV','maSV');
    }
}
