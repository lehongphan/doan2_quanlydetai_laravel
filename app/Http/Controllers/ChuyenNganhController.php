<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nganh;
use App\Chuyennganh;
class ChuyenNganhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()     
    {
        $nganh = Nganh::pluck('tenNganh', 'maNganh');
        $tennganh = Nganh::get('tenNganh',0);
         $chuyennganh = Chuyennganh::all();
         return view('admin.chuyennganh',compact('chuyennganh','nganh','tennganh'));
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
          'tenCN'=>'required',
          'maNganh'=>'required',
          ]);
          Chuyennganh::create($request->all());
          return redirect()->route('chuyennganh.index')->with('success','Post created success');
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
    public function update(Request $request, $maCN)
    {
        $this->validate($request,[
        'tenCN' => 'required',
        'maNganh' => 'required',
        ]);
        Chuyennganh::find($maCN)->update($request->all());
        return redirect()->route('chuyennganh.index')->with('success','Post update success');
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
