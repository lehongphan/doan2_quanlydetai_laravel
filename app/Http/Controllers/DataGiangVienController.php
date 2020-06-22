<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Giangvien;
use App\Hocham;
use App\Khoa;
use App\Hocvi;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DataGiangVienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $khoa = Khoa::pluck('tenKhoa', 'maKhoa');
        $tenkhoa = Khoa::get('tenKhoa',0);
        //$exams = Sinhvien::getlopchuyennganh($maLop)->with('tenLop')->get();
        $hocham = Hocham::pluck('tenHH', 'maHH');
        $tenhh = Hocham::get('tenHH',0);

        $hocvi = Hocvi::pluck('tenHV', 'maHV');
        $tenhv = Hocvi::get('tenHV',0);
         $giangvien = Giangvien::all();
         return view('admin.giangvien',compact('giangvien','hocham','tenhh','hocvi','tenhv','khoa','tenkhoa'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function validator(array $data)
    {
     return Validator::make($data, [
     'maKhoa'=>'required',
     'maHH'=>'required',
     'maHV'=>'required',
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {
     $this->validator($request->all())->validate();
     Giangvien::create([
     'maKhoa'=>$request->maKhoa,
     'maHH'=>$request->maHH,
     'maHV'=>$request->maHV,
     'hoLot'=>$request->hoLot,
     'ten'=>$request->ten,
     'gioiTinh'=>$request->gioiTinh,
     'ngaySinh'=>$request->ngaySinh,
     'email'=>$request->email,
     'queQuan'=>$request->queQuan,
     'password'=>Hash::make($request->password),
     ]);
     return redirect()->route('giangvien.index')->with('success','Post created success');
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
    public function update(Request $request, $maGV)
    {
        $this->validate($request,[
        'maKhoa'=>'required',
        'maHH'=>'required',
        'maHV'=>'required',
        'hoLot'=>'required',
        'ten'=>'required',
        'gioiTinh'=>'required',
        'ngaySinh'=>'required',
        'email'=>'required|unique:sinhviens',
        'queQuan'=>'required',
        ]);
        Giangvien::find($maGV)->update($request->all());
        return redirect()->route('giangvien.index')->with('success','Post update success');
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
