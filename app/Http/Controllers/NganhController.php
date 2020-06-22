<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nganh;
use App\Khoa;
class NganhController extends Controller
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
         $nganh = Nganh::all();
         return view('admin.nganh',compact('nganh','khoa','tenkhoa'));
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
          'tenNganh'=>'required',
          'maKhoa'=>'required',
          'soNamDT'=>'required',
          ]);
          Nganh::create($request->all());
          return redirect()->route('nganh.index')->with('success','Post created success');
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
    public function update(Request $request, $maNganh)
    {
        $this->validate($request,[
        'tenNganh' => 'required',
        ]);
        Nganh::find($maNganh)->update($request->all());
        return redirect()->route('nganh.index')->with('success','Post update success');
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
