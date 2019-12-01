<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\slide;

class SlideController extends Controller
{
    public function index()
    {     
        $slides = slide::orderBy('id', 'asc')->paginate(3);
        return view('admin.slides.index',compact('slides'));
    }

    public function store(Request $request){

	    $request->validate([
	            'name' => 'required',
	            'img' => 'required',
	    ]);

     	$filenameWithExt = $request->file('img')->getClientOriginalName();
     	$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
     	$extension = $request->file('img')->getClientOriginalExtension();
     	$filenameToStore = $filename . '_' . time() . '.' . $extension;
     	$path = $request->file('img')->storeAs('public/photos/slides', $filenameToStore);
  
        $slides = new slide;
        $slides->name = $request->input('name');
        $slides->noidung = $request->input('noidung');
        $slides->image = $filenameToStore;
        $slides->save();

        return back();
    }

    public function update(Request $request){

       	$slides = Slide::find($request->id);
        $data = $request->all();
        if($request->hasFile('img')){   
            if ($slides->image) {
                Storage::disk('public')->delete('photos/slides/'.$slides->image);
            }
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('img')->storeAs('public/photos/slides', $filenameToStore);
            $slides->image = $filenameToStore;
        }
        $slides->update($data);     
        return back();         
    }

    public function destroy(Request $request){
        $slides = Slide::find($request->id);
        if ($slides->image) {
            Storage::disk('public')->delete('photos/slides/'.$slides->image);
        }
        $slides->delete();
        return back();
    }

}
