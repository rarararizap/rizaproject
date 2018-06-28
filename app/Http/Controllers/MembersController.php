<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index(){
        return view('members');
    }
    
    public function show ($name) {
        return view('members.'. $name);
    }
    /*
     public function koreken(){
        return view('koreken');
    }
    
     public function shuhei(){
        return view('shuhei');
    }
    
     public function yuta(){
        return view('yuta');
    }
    
     public function marina(){
        return view('marina');
    }
    
     public function kanna(){
        return view('kanna');
    }
    
     public function minami(){
        return view('minami');
    }
    */
    
}
