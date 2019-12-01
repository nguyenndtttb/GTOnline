<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Luat;

class LuatController extends Controller
{
    public function index()
    {     
        $luat = Luat::orderBy('id', 'asc')->paginate(5);
        return view('admin.luat.index',compact('luat'));
    }

    public function store(Request $request){

	    $request->validate([
	            'phuongtien' => 'required',
	            'tieude' => 'required',
                'noidung' => 'required',
                'mucphat' => 'required',
                'nghidinh' => 'required'
	    ]);

     	$filenameWithExt = $request->file('img')->getClientOriginalName();
     	$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
     	$extension = $request->file('img')->getClientOriginalExtension();
     	$filenameToStore = $filename . '_' . time() . '.' . $extension;
     	$path = $request->file('img')->storeAs('public/photos/luat', $filenameToStore);
  
        $luat = new Luat;
        $luat->phuongtien = $request->input('phuongtien');
        $luat->tieude = $request->input('tieude');
        $luat->noidung = $request->input('noidung');
        $luat->tieude = $request->input('tieude');
        $luat->mucphat = $request->input('mucphat');
        $luat->nghidinh = $request->input('nghidinh');
        $luat->hinhanh = $filenameToStore;
        $luat->save();

        return back();
    }

    public function update(Request $request){

       	$canhbao = CanhBao::find($request->id);
        $data = $request->all();
        if($request->hasFile('img')){   
            if ($canhbao->hinhanh) {
                Storage::disk('public')->delete('photos/canhbao/'.$canhbao->hinhanh);
            }
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('img')->storeAs('public/photos/canhbao', $filenameToStore);
            $canhbao->hinhanh = $filenameToStore;
        }
        $canhbao->update($data);     
        return back();         
    }

    public function destroy(Request $request){
        $canhbao = CanhBao::find($request->id);
        if ($canhbao->hinhanh) {
            Storage::disk('public')->delete('photos/canhbao/'.$canhbao->hinhanh);
        }
        $canhbao->delete();
        return back();
    }
}
