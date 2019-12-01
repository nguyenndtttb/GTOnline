<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\TinTuc;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function Them($id,Request $request){
        $this->validate($request,
            [
                'content' => 'required'
            ],
            [
                'content.required' => 'Bạn chưa nhập nội dung'
            ]);
        $tintuc = TinTuc::find($id);
        $comment = new Comment;
        $comment->idUser = Auth::user()->id;
        $comment->idTinTuc = $id;
        $comment->NoiDung = $request->content;
        $comment->save();
        return back();
    }
}
