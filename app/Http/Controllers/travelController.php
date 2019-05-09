<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class travelController extends Controller
{
    public function index()
    {
        $travels = \App\tavel::orderBy('datestart', 'ASC')
            ->get();
        return view('welcome', ['travel' => $travels]);
    }

    public function create()
    {
        return view('newtravel');
    }

    public function createuser(){
        return view('newuser');
    }

    public function store(Request $request){

        $request->validate([
            'title'=>'required|min:3',
            'content'=>'required',
            'datestart'=>'required',
            'dateend'=>'required',
            'maxnumber'=>'required',
        ]);

        $travel = new \App\travel();
        $travel->title=$request->get('title');
        $travel->content=$request->get('content');
        $travel->datestart=$request->get('datestart');
        $travel->dateend=$request->get('dateend');
        $travel->maxnumber=$request->get('maxnumber');

        $travel->save();

        return redirect('/');
    }

    public function storeuser(Request $request){

        $request->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
            'phonenumber'=>'required',
        ]);

        $user = new \App\User();
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->phonenumber=$request->get('phonenumber');

        $user->save();

        return redirect('/');
    }

    public function show($id){
        $travel = \App\travel::where('id',$id)->first();
        return view('travel', ['travel' =>$travel]);
    }

}
