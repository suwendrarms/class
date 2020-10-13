<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function create(Request $request)
    {
        //dd($request);
         contact::create([
            'email' => $request['email'],
            'name'=>$request['name'],
            'subject' => $request['subject'],
            'msg' => $request['msg'],
            
        ]);
        return view('contact');
    }
}
