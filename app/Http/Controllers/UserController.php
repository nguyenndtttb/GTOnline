<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function index()
    {     
        $users = User::orderBy('id', 'asc')->paginate(5);
        return view('admin.users.index',compact('users'));
    }
    public function store(Request $request)
    {
        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password =$request->password;
        $users->save();
        return back();  
    }
    public function update(Request $request)
    {
        $users = User::findOrFail($request->id);
        $users->update($request->all());
       
        return back();
    }
    public function destroy(Request $request)
    {
        $users = User::findOrFail($request->id);
        $users->delete();
        return back();
    }
}