<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InviteController extends Controller
{
    //
    public function index(){
        return view ('pages.invite');
    }
    public function sendInvite(Request $request){
        $email = $request->email;
        $token = 'xoxp'.env('SLACK_TOKEN');
        Unirest\Request::verifyPeer(false);
        $headers = array('Accept' => 'application/json');
        $data = array('token' => $token,'channels'=>'C3QLSPBNK,C3P9Y1VED','email'=> $email);
        $body = Unirest\Request\Body::form($data); 
        $response = Unirest\Request::post('https://slack.com/api/users.admin.invite', $headers, $body);
        dd($response);
       
    }
}
