<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sinhvien;
use App\Lopchuyennganh;
use Illuminate\Support\Facades\Hash;
class DataSinhVienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$maLop=Lopchuyennganh::get('nhiemKy',0);
        //$exams = Sinhvien::getlopchuyennganh($maLop)->with('nhiemKy')->get();
        //$classes = Lopchuyennganh::pluck('nhiemKy', 'maLop');
        //$iclass = $exams;


        $sinhvien = Sinhvien::select('maSV','maLop','hoLot','ten','ngaySinh','gioiTinh','email','queQuan','password','is_gv','remember_token','created_at','updated_at')->get() ;
        $lopchuyennganh = Lopchuyennganh::all();
        return view('admin.sinhvien',compact('sinhvien','lopchuyennganh'));
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
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'name'=>'required|string|max:255',
            'email'=>'required',
            'password'=>'required', 
          ]);
          Sinhvien::create($request->all());
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
            'name' => 'required',
            'email' => 'required',
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
