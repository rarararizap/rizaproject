<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        return view('welcome');
    }
    
    public function keyword(Request $request) {
        
        
        $keyword = $request->keyword;
        
        if ($keyword==='結果にコミット'){
             return view('members.members');
        }
       else{
            return redirect()->back()->with('situation', __('合言葉間違えてるよ？'));
        }
    }
    
    
    
}
