<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\CanhBao;

class CanhBaoController extends Controller
{
    public function index()
    {     
        $canhbao = CanhBao::orderBy('id', 'asc')->paginate(5);
        return view('admin.canhbao.index',compact('canhbao'));
    }

    public function store(Request $request){

	    $request->validate([
	            'tenduong' => 'required',
	            'tinhtrang' => 'required',
	    ]);

     	$filenameWithExt = $request->file('img')->getClientOriginalName();
     	$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
     	$extension = $request->file('img')->getClientOriginalExtension();
     	$filenameToStore = $filename . '_' . time() . '.' . $extension;
     	$path = $request->file('img')->storeAs('public/photos/canhbao', $filenameToStore);
  
        $canhbao = new CanhBao;
        $canhbao->tenduong = $request->input('tenduong');
        $canhbao->kinhdo = $request->input('kinhdo');
        $canhbao->vido = $request->input('vido');
        $canhbao->tieude = $request->input('tieude');
        $canhbao->tinhtrang = $request->input('tinhtrang');
        $canhbao->nguontin = $request->input('nguontin');
        $canhbao->diadiem = $request->input('diadiem');
        $canhbao->hinhanh = $filenameToStore;
        $canhbao->save();

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

    public function chitiet($id){
        $canhbao = CanhBao::where('id',$id)->first();
        return view('admin.canhbao.view',compact('canhbao'));
    }
}
