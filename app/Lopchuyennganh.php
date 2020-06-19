<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Lopchuyennganh extends Authenticatable

{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'khoa','nhiemKy',
    ]; 
    
    public function sinhVien()
    {
        return $this->hasMany('App\Sinhvien', 'maLop');
    }
    public function getChuyenNganh()
    {
        return $this->belongsTo('App\Chuyennganh', 'maCN','maCN');
    }
}
