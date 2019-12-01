<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiTin;
use App\TheLoai;

class LoaiTinController extends Controller
{
    public function index()
    {     
        $loaitin = LoaiTin::orderBy('id', 'asc')->paginate(5);
        $theloai = TheLoai::all();
        return view('admin.loaitin.index',compact('loaitin','theloai'));
    }

    public function store(Request $request)
    {
        $loaitin = new LoaiTin;
        $loaitin->idTheLoai = $request->idtheloai;
        $loaitin->Ten = $request->ten;
        $loaitin->TenKhongDau =$request->tenkhongdau;
        $loaitin->save();

        return back();  
    }

    public function update(Request $request)
    {

        $loaitin = LoaiTin::findOrFail($request->id);
        $loaitin->idTheLoai = $request->idtheloai;
        $loaitin->Ten = $request->ten;
        $loaitin->TenKhongDau =$request->tenkhongdau;
        $loaitin->save();
       
        return back();
    }

    public function destroy(Request $request)
    {
        
        $loaitin = LoaiTin::findOrFail($request->id);
        $loaitin->delete();

        return back();
    }
}
