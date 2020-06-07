<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function giangVienDeTai()
    {
        redirect()->intended('/giangvien/detai');
    }
    public function adminSinhVien()
    {
        redirect()->intended('/admin/sinhvien');
    }
  
    
}
