<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newuser;


class UserController extends Controller
{
    //
    public function index(){
        return view('addfield');
    }

    public function create(Request $request){
        $newuser= new Newuser;
        $newuser->name = $request->input('name');
        $newuser->email = $request->input('email');
        $newuser->gender = $request->input('gender');
        $newuser->save();
        return redirect('/')->withInput();

    }
    public function list()
    {
        $newuser = Newuser::all();
        return view('userlist',compact('newuser'));
    }
    public function edit($id)
    {
        $newuser = Newuser::find($id);
        return view('editfield', compact('newuser'));
    }
    public function update(Request $request, $id){
        $newuser= Newuser::find($id);
        $newuser->name = $request->input('name');
        $newuser->email = $request->input('email');
        $newuser->gender = $request->input('gender');
        $newuser->update();
        return redirect('/')->with('status',"insert successfully");
    }
    public function delete($id)
    {
        $newuser=Newuser::find($id);
        $newuser->delete();
        return redirect('/');
    }
    public function search(Request $request)
    {

        $search = $request->input('search');

        $newuser = Newuser::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%$search%")
                         ->orWhere('email', 'like', "%$search%")->get();
        });
        return view('/userlist', compact('newuser'));
    }
}
