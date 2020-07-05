<?php

namespace App\Http\Controllers;
use App\Detai;
use App\Dangkydetai;
use App\Hocky;
use App\Doan;
use App\Nienkhoa;
use Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
class DeTaiSVController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request)
    {
        $date_m=Carbon::now()->month; //tháng
        $date_y=Carbon::now()->year; //năm
        
            if($date_m >= 8 && $date_m <=12){
                $hocky=1;               
                                        
            }
            elseif($date_m >= 1 && $date_m <=7){
                $hocky=2; 
            }
            else
            {
                $hocky=3;
            }

        $mahk=$request->query->get('maHK',0);

        if($mahk==0){
            $iclass = $hocky;
            $doan = Doan::where('maDA', '>', 0)->pluck('doAn', 'maDA');
            if($hocky==1){
                $idoan=1;
                
            }
            elseif($hocky==2){
                $idoan=2;
                
            }else{
                $idoan=$request->query->get('maDA',0);
            }
            
        }
        else{
            $iclass = $mahk;
            $idoan=$request->query->get('maDA',0);
            if($mahk==1){
                $doan = Doan::where('maDA', '<>', 2)->pluck('doAn', 'maDA');
            }
            elseif($mahk==2){
                $doan = Doan::where('maDA', '<>', 1)->where('maDA', '<>', 3)->pluck('doAn', 'maDA');
            }else{
                $doan = Doan::where('maDA', '>', 0)->pluck('doAn', 'maDA');
            }
            
        }         

        $mank=$request->query->get('maNK',0); 
        if($mank==0){
            $iclass2 = NienKhoa::max('maNK');
        }
        else{
            $iclass2 = $mank;
        }

        
        $classes2 = NienKhoa::where('maNK', '>', 0)->pluck('nienKhoa', 'maNK');

        $detai = Detai::where('maNK',$iclass2)->where('maHK',$iclass)->where('maDA',$idoan)->whereRaw('detais.soSVDK < detais.soSVTT')->get();
        $classes = Hocky::where('maHK', '>', 0)->pluck('hocKy', 'maHK');   
        return view('detai',compact('detai','iclass','classes','iclass2','classes2','doan','idoan'));
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
        'maNK'=>'required',
        'maHK'=>'required',
        'maDA'=>'required',
        ]);
        
        Dangkydetai::create($request->all());        
        Detai::find($request->maDeTai)->update(['soSVDK' => +1]);
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

    
