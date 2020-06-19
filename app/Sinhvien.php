<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Sinhvien extends Authenticatable
{
    
    use Notifiable;
    

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
        'ten','maLop', 'email', 'password',
    ];
    public function getLopChuyenNganh()
    {
        return $this->belongsTo('App\Lopchuyennganh', 'maLop','maLop');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
