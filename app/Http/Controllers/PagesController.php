<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Unirest;

class PagesController extends Controller
{
    //
    public function index(){
        return view('pages.index');
    }

    public function project(){
        return view('pages.project');
    }

    public function participants(){
        Unirest\Request::verifyPeer(false);
        $cursor ='';
        $headers = array('Accept' => 'application/json');
        $data = array('token' => 'xoxp-126706790599-233947500993-259074763425-4f7dd8e7d44a03b6c035717f9254853d',
        'cursor'=>$cursor,'limit'=>'');
        
        $body = Unirest\Request\Body::form($data);
        
        $response = Unirest\Request::post('https://slack.com/api/users.list', $headers, $body);
        $members  = $response->body->members;
        return view('pages.participants', compact('members'));
        
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
