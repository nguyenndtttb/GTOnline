<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;

class TheLoaiController extends Controller
{
    public function index()
    {     
        $theloai = TheLoai::orderBy('id', 'asc')->paginate(5);
        return view('admin.theloai.index',compact('theloai'));
    }

    public function store(Request $request)
    {
        $theloai = new TheLoai;
        $theloai->Ten = $request->ten;
        $theloai->TenKhongDau =$request->tenkhongdau;
        $theloai->save();

        return back();  
    }

    public function update(Request $request)
    {

        $theloai = TheLoai::findOrFail($request->id);
        $theloai->Ten = $request->ten;
        $theloai->TenKhongDau =$request->tenkhongdau;
        $theloai->save();
        return back();
    }

    public function destroy(Request $request)
    {
        
        $theloai = TheLoai::findOrFail($request->id);
        $theloai->delete();

        return back();
    }
}
