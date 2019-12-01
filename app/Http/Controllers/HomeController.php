<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Luat;
use App\TheLoai;
use Carbon\Carbon;
use App\TinTuc;
use App\LoaiTin;
use App\CanhBao;

class HomeController extends Controller
{
    public function __construct(){
        $data = [
            'theloai' => TheLoai::all(),
            'dt' => Carbon::now('Asia/Ho_Chi_Minh')
        ];
        view()->share('data',$data);
    }

    public function index()
    {
        $tintuc = TinTuc::all();
        $tintuc1 = TinTuc::where('NoiBat',1)->orderBy('updated_at','asc')->paginate(10);
        $tintuc2 = TinTuc::where('NoiBat',2)->orderBy('updated_at','asc')->paginate(10);
        $tintuc3 = TinTuc::where('NoiBat',3)->orderBy('updated_at','asc')->paginate(10);
        $tintuc4 = TinTuc::where('NoiBat',4)->orderBy('updated_at','asc')->paginate(10);
        $tintuc5 = TinTuc::where('NoiBat',5)->orderBy('updated_at','asc')->paginate(10);
        $tintuc6 = TinTuc::where('NoiBat',6)->orderBy('updated_at','asc')->paginate(10);
        $loaitin = LoaiTin::all();
        return view('index',compact('tintuc','loaitin','tintuc2','tintuc3','tintuc1','tintuc4','tintuc5','tintuc6'));
    }

    public function chitiet($id)
    {
        $loaitin = LoaiTin::all();
        $tintuc = TinTuc::where('id',$id)->first(); 
        $tinlienquan = TinTuc::where('idLoaiTin',$tintuc->idLoaiTin)->take(6)->get();
        return view('pages.detail',compact('tintuc','loaitin','tinlienquan'));
    }

    public function canhbao()
    {
        $canhbao = CanhBao::all();
        $canhbaomoi = CanhBao::orderBy('updated_at','asc')->paginate(10);
        return view('pages.canhbao',compact('canhbao','canhbaomoi'));
    }

    public function chitietcanhbao($id)
    {
        $canhbao = CanhBao::where('id',$id)->first(); 
        $canhbaomoi = CanhBao::orderBy('updated_at','asc')->paginate(10);
        return view('pages.canhbaochitiet',compact('canhbao','canhbaomoi'));
    }

    public function luatgiaothong(Request $request)
    {   
        $key = $request->input('keyword');
        $keyword =  $key;
        $luat = Luat::where('TieuDe','like',"%$request->keyword%")
            ->orWhere('PhuongTien','like',"%$request->keyword%")
            ->orWhere('NoiDung','like',"%$request->keyword%")
            ->orWhere('MucPhat','like',"%$request->keyword%")
            ->orWhere('NghiDinh','like',"%$request->keyword%")
            ->get()
            ->map( function ($row) use ($keyword) {
                $row->key = preg_replace('/(' . $keyword . ')/i', "<b>$1</b>", $row->key);
                return $row;
            });
        return view('pages.luat',compact('luat')) ;
    }
}
