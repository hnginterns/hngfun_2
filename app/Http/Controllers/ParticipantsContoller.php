<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Unirest;
use Illuminate\Pagination\LengthAwarePaginator;
class ParticipantsContoller extends Controller
{
    //
    public $members;
    public $members_active =[];
    public $members_deleted = [];
    public function __construct(){
        $token = 'xoxp'.env('SLACK_TOKEN');
        Unirest\Request::verifyPeer(false);
        $cursor ='';
        $headers = array('Accept' => 'application/json');
        $data = array('token' => $token,'cursor'=>$cursor,'limit'=>'');
        $body = Unirest\Request\Body::form($data); 
        $response = Unirest\Request::post('https://slack.com/api/users.list', $headers, $body);
        $this->members  = $response->body->members;
            foreach($this->members as $member) {
                if($member->deleted !=TRUE  and $member->name !='slackbot' and $member->is_admin ==FALSE ){
                    array_push($this->members_active,$member);
                }
                if($member->deleted ==TRUE  and $member->name !='slackbot' ){
                    array_push($this->members_deleted,$member);
                }
            }

       
    }
    public function index (Request $requests){
        $pages =$requests->page;
        $membes = $this->members;
        $total = count($membes);
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $members_col = collect($membes);
        $perPage = 20;
        $currentPageSearchResults = $members_col->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $members = new LengthAwarePaginator($currentPageSearchResults, count($members_col), $perPage,$currentPage, ['path'=>url('/participants')]);    
        
       // $members = new LengthAwarePaginator($collection, count($collection), 10, 1, ['path'=>url('api/products')]);
        return view('pages.participants',compact('members'));
    }
    public function active (Request $requests){
        $pages =$requests->page;
        $membes = $this->members_active;
        $total = count($membes);
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $members_col = collect($membes);
        $perPage = 20;
        $currentPageSearchResults = $members_col->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $members_active = new LengthAwarePaginator($currentPageSearchResults, count($members_col), $perPage,$currentPage, ['path'=>url('/participants/active')]);    
        
       // $members = new LengthAwarePaginator($collection, count($collection), 10, 1, ['path'=>url('api/products')]);
        return view('pages.participants',compact('members_active'));
    }
}
