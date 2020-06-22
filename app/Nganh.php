<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Nganh extends Authenticatable

{
    use Notifiable;
    protected $primaryKey = 'maNganh';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'maKhoa','tenNganh','soNamDT'
    ];
    
    public function getKhoa()
    {
    return $this->belongsTo('App\Khoa', 'maKhoa','maKhoa');
    }
    public function getChuyenNganh()
    {
    return $this->hasMany('App\Chuyennganh', 'maNganh','maNganh');
    }
    
}
