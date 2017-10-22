<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Unirest;

class ParticipantsContoller extends Controller
{
    //
    public function index(){
        $token = 'xoxp'.env('SLACK_TOKEN');
        Unirest\Request::verifyPeer(false);
        $cursor ='';
        $headers = array('Accept' => 'application/json');
        $data = array('token' => $token,'cursor'=>$cursor,'limit'=>'');
        
        $body = Unirest\Request\Body::form($data);
        
        $response = Unirest\Request::post('https://slack.com/api/users.list', $headers, $body);
        $members  = $response->body->members;
        return view('pages.participants', compact('members'));
        
    }
}
