<?php

namespace App\Http\Controllers;
use App\Detai;
use App\Dangkydetai;

use Illuminate\Http\Request;

class DeTaiSVController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
    $dangkydetai = Dangkydetai::all();
    $detai = Detai::all();

    
    return view('detai',compact('detai','dangkydetai'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $this->validate($request,[
        'maDeTai'=>'required',
        'maGV'=>'required',
        'maSV'=>'required',
        ]);
        Dangkydetai::create($request->all());
        return redirect()->route('detaisv.index')->with('success','Post created success');
    //
    }

    /**
    * Display the specified resource.
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
    //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
    //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
    //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
    //
    }
    public function getAdd($username){
    /*
    Lấy thông tin người dùng trong bảng user thông qua $username
    */
    $user = User::where(['username'=>$username])->first();

    Auth::user()->addFriend($user);

    return redirect()->route('profile.index',['username'=>$user->username])
    ->with('info','Friend request sent');
    }
}

    
