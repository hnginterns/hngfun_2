<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Unirest;

class ParticipantsContoller extends Controller
{
    //
    public $members;
    public function __construct(){
        $token = 'xoxp'.env('SLACK_TOKEN');
        Unirest\Request::verifyPeer(false);
        $cursor ='';
        $headers = array('Accept' => 'application/json');
        $data = array('token' => $token,'cursor'=>$cursor,'limit'=>'');
        $body = Unirest\Request\Body::form($data); 
        $response = Unirest\Request::post('https://slack.com/api/users.list', $headers, $body);
        $this->members  = $response->body->members;
        /* if($da =='active'){
            $members_active=array();
            foreach($members as $member) {
                if($member->deleted !=TRUE  and $member->name !='slackbot' and $member->is_admin ==FALSE ){
                    array_push($members_active,$member);
                }
            }
            return view('pages.participants', compact('members_active'));
            
        }else{
            return $members;
        } */
       
    }
    public function index (Request $requests){
        $pages =$requests->page;
        $members = $this->members;
        $total = count($members);
        $members_per_page = 20;
        $last;
        $prev = $pages - 1;
        if($total > 20){
            $last = ceil($total/$members_per_page);
        }else{
            $last = '';
        }
        $start;
        $end;
        if($pages !=null){
            $start =( $pages -1) * $members_per_page;
            $end = $start + 20;
            $pages = 0;
        }else {
            $start = 0;
            $end = 20;
        }
        $memberstoshow = [] ;
        for($start;$start<$end;$start++){
            $memberstoshow []= $members[$start];
        }
    
        return view('pages.participants', compact('memberstoshow','pages','total','last','prev','start'));
    }
}
