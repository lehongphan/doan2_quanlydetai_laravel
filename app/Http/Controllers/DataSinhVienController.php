<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sinhvien;
use App\Lopchuyennganh;
use App\Chuyennganh;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class DataSinhVienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $maLop=Lopchuyennganh::get('tenLop',0);
        //$exams = Sinhvien::getlopchuyennganh($maLop)->with('tenLop')->get();
        $classes = Lopchuyennganh::pluck('tenLop', 'maLop');
        $iclass = $maLop;
        //$chuyennganh  = Sinhvien::join('lopchuyennganhs', 'sinhviens.maLop', '=', 'lopchuyennganhs.maLop')->get();
        //$sinhvien  = Chuyennganh::join('chuyennganhs', 'sinhviens.maCN', '=', 'chuyennganhs.maCN')->get();

       

        //$sinhvien = Sinhvien::select('maSV','maLop','hoLot','ten','ngaySinh','gioiTinh','email','queQuan','password','is_gv','remember_token','created_at','updated_at')->get() ;
        $sinhvien = Sinhvien::all();
        return view('admin.sinhvien',compact('sinhvien','classes','iclass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
 protected function validator(array $data)
 {
 return Validator::make($data, [
 'maLop'=>'required',
 'hoLot'=>'required',
 'ten'=>'required',
 'gioiTinh'=>'required',
 'ngaySinh'=>'required',
 'email'=>'required|unique:sinhviens',
 'queQuan'=>'required',
 'password'=>'required',
 ]);
 }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validator($request->all())->validate();
         Sinhvien::create([
         'maLop'=>$request->maLop,
         'hoLot'=>$request->hoLot,
         'ten'=>$request->ten,
         'gioiTinh'=>$request->gioiTinh,
         'ngaySinh'=>$request->ngaySinh,
         'email'=>$request->email,
         'queQuan'=>$request->queQuan,
         'password'=>Hash::make($request->password),
         ]);
          return redirect()->route('sinhvien.index')->with('success','Post created success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $maSV)
    {
        $this->validate($request,[
            'ten' => 'required',
            'email' => 'required',
            'maLop' => 'required',
          ]);
          Sinhvien::find($maSV)->update($request->all());
          return redirect()->route('sinhvien.index')->with('success','Post update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
