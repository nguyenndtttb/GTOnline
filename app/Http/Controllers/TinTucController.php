<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\TinTuc;
use App\LoaiTin;

class TinTucController extends Controller
{
    public function index()
    {     
        $tintuc = TinTuc::orderBy('id', 'asc')->paginate(5);
        $loaitin = LoaiTin::all();
        return view('admin.tintuc.index',compact('tintuc','loaitin'));
    }

    public function store(Request $request){

	    $request->validate([
	            'tieude' => 'required',
	            'tomtat' => 'required',
	            'noidung' => 'required',
	    ]);

     	$filenameWithExt = $request->file('img')->getClientOriginalName();
     	$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
     	$extension = $request->file('img')->getClientOriginalExtension();
     	$filenameToStore = $filename . '_' . time() . '.' . $extension;
     	$path = $request->file('img')->storeAs('public/photos/tintuc', $filenameToStore);
  
        $tintuc = new TinTuc;
        $tintuc->TieuDe = $request->input('tieude');
        $tintuc->TieuDeKhongDau = $request->input('tieudekhongdau');
        $tintuc->TomTat = $request->input('tomtat');
        $tintuc->NoiDung = $request->input('noidung');
        $tintuc->NoiBat = $request->input('noibat');
        $tintuc->idLoaiTin = $request->input('idloaitin');
        $tintuc->SoLuotXem = "0";
        $tintuc->Hinh = $filenameToStore;
        $tintuc->save();

        return back();
    }

    public function update(Request $request){

       	$tintuc = TinTuc::find($request->id);
        $data = $request->all();
        if($request->hasFile('img')){   
            if ($tintuc->Hinh) {
                Storage::disk('public')->delete('photos/tintuc/'.$tintuc->Hinh);
            }
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('img')->storeAs('public/photos/tintuc', $filenameToStore);
            $tintuc->Hinh = $filenameToStore;
        }
        $tintuc->TieuDe = $request->input('tieude');
        $tintuc->TieuDeKhongDau = $request->input('tieudekhongdau');
        $tintuc->TomTat = $request->input('tomtat');
        $tintuc->NoiDung = $request->input('noidung');
        $tintuc->NoiBat = $request->input('noibat');
        $tintuc->idLoaiTin = $request->input('idloaitin');
        $tintuc->SoLuotXem = "0";
        $tintuc->update($data);     
        return back();         
    }

    public function destroy(Request $request){
        $tintuc = TinTuc::find($request->id);
        if ($tintuc->Hinh) {
            Storage::disk('public')->delete('photos/tintuc/'.$tintuc->Hinh);
        }
        $tintuc->delete();
        return back();
    }

    public function chitiet($id){
        $tintuc = TinTuc::where('id',$id)->first();
        return view('admin.tintuc.view',compact('tintuc'));
    }
}
