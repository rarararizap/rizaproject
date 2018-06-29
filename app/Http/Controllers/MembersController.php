<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index(){
        return view('members');
    }
    
    public function koreken () {
        return view('members.koreken');
    }
    
    public function shuhei () {
        return view('members.shuhei');
    }
    
    public function yuta () {
        return view('members.yuta');
    }
    
    public function marina () {
        return view('members.marina');
    }
    
    public function kanna () {
        return view('members.kanna');
    }
    
    public function minami () {
        return view('members.minami');
    }
    
}
