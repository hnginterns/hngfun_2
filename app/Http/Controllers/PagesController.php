<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   
    //
    public function index(){
        return view('pages.index');
    }

    public function project(){
        return view('pages.project');
    }
    
    public function pastinternship(){
        return view('pages.pastinternship');
    }
    public function blog(){
        return view('pages.blog');
    }
    public function library(){
        return view('pages.library');
    }
    public function task(){
        return view('pages.task');
    }
    public function supporters(){
        return view('pages.supporters');
    }
    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');
    }
}
