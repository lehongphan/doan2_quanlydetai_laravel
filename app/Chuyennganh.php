<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Chuyennganh extends Authenticatable

{
    use Notifiable;
    protected $primaryKey = 'maCN';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tenCN','maNganh'
    ]; 
    public function getLopChuyenNganh()
    {
        return $this->hasMany('App\Lopchuyennganh', 'maCN','maCN');
    }
     public function getChuyenNganh()
     {
     return $this->belongsTo('App\Nganh', 'maNganh','maNganh');
     }
    
}
