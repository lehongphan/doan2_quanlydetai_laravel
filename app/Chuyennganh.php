<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Chuyennganh extends Authenticatable

{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tenCN'
    ]; 
    public function getLopChuyenNganh()
    {
        return $this->hasMany('App\Lopchuyennganh', 'maCN','maCN');
    }
    
}
