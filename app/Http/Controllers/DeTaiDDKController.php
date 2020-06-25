<?php

namespace App\Http\Controllers;
use App\Detai;
use App\Dangkydetai;
use Illuminate\Http\Request;
use DB;
use Auth;
class DeTaiDDKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $magv=Auth::guard('giangvien')->user()->maGV;
        $detai = DB::table('dangkydetais')
        ->join('detais', 'dangkydetais.maDeTai', '=', 'detais.maDeTai')
        ->join('sinhviens', 'dangkydetais.maSV', '=', 'sinhviens.maSV')->get()->where('maGV',$magv);
        return view('giangvien.detaiddk',compact('detai'));
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
        'tenDeTai'=>'required',
        'thongTinDeTai'=>'required',
        ]);
        Detai::create($request->all());
        return redirect()->route('detaiddk.index')->with('success','Post created success');
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
    public function update(Request $request, $maDangKyDT)
    {
        $this->validate($request,[
        'trangThai' => 'required',
        ]);
        Dangkydetai::find($maDangKyDT)->update($request->all());
        return redirect()->route('detaiddk.index')->with('success','Post update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($maDangKyDT)
    {
        Dangkydetai::where('maDangKyDT',$maDangKyDT)->delete();
        return redirect()->route('detaiddk.index')->with('success','Post update success');
    }
}
