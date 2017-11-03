@extends('layouts.app')

@section('title')
    Participant
@endsection

@section('body')
<section class="container-fuild content text-center">
  <div class="jumbotron bg-image">
   <img class="" src="{{ URL::asset('img/logo.png') }}" alt="Cross section of participants" id="logo">
   <div class="row text-right">
         <div class="col-lg-6">
         <div class="input-group" id="search">
             <form class="form form-inline" action="{{url('/participants/search')}}" method="get">
            <input type="text" class="form-control" name="user" placeholder="Search by participants slack username" aria-label="Search for..." id="textHolder">
              <span class="input-group-btn">
                <button class="btn " type="submit" id="searchbutton">Search</button>
              </span>
</form>
          </div>
        </div>
  </div>
  <div class="row">
      <div class="col-md-12">
        <p id="headertext">
          Our interns are passionate about learning,<br> with different interests and backgrounds, <br> they work together to achieve common goals. 
        </p>
     </div>
   </div>
</div>
  </div>
  <div class="row text-center">
    <div class="col-md-12">
      <p id="Participantslist">PARTICIPANTS</p>
    </div>
  </div>
		</div>
		<div class="col-sm-12 text-left">
		    <p class="about">
        {{$total}}
        @if(isset($members_active))
        active
        @endif
        @if(isset($members_deleted))
        disabled
        @endif
         participants in total</p>
	    </div>
    <div class="container-fuild">
        <nav class="navbar navbar-expand-md navbar-light">
            <ul class="navbar-nav mr-auto part-nav">
            @if(isset($members))
                <li  class="nav-item active"><a  class="nav-link" href="{{url('/participants')}}">All Participants</a></li>
            @else
            <li  class="nav-item "><a  class="nav-link" href="{{url('/participants')}}">All Participants</a></li>
           @endif
           @if(isset($members_active))
                <li  class="nav-item active"><a class="nav-link" href="{{url('/participants/actives')}}">Active Participants</a></li>
            @else
            <li  class="nav-item"><a class="nav-link" href="{{url('/participants/active')}}">Active Participants</a></li>
            @endif
            @if(isset($members_deleted))
                <li class="nav-item active"><a class="nav-link" href="{{url('/participants/deleted')}}">Deleted Participants</a></li>
            @else
            <li class="nav-item"><a class="nav-link" href="{{url('/participants/disabled')}}">Disabled Participants</a></li>
           @endif
            </ul>
        </nav>
    </div>
        <!--first profile row-->
    <div class="container">
        <div class ="row  justify-content-center text-center profileRow">
        
              @if(isset($members))
                @foreach($members as $member)
                        <div class="col-md-3">
                            <div class="card project-card participant">
                            <div class="participant-img">
                                <img class="card-img-top" src="{{$member->profile->image_192}}" alt="Card image cap">
                            </div>
                            <div class="card-block project-card-block">
                                <p class="card-text">{{$member->profile->real_name_normalized}}</p>
                                @if(isset($member->profile->title))
                                    @if(strlen($member->profile->title)>15)
                                    <p class="card-text2">{{substr($member->profile->title,0,20)}}</p>
                                    @else
                                <p class="card-text2">{{$member->profile->title}}</p>
                                @endif
                                @else
                                <p class="card-text2">...</p>
                                @endif
                                <div class="row details">
                                    <div class="col-xs-6">
                                        <p class="slackId text-left">{{$member->name}}</p>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="#"> <i class="fa fa-user fonta"></i></a>
                                        <a href="#"> <i class="fa fa-envelope fonta"></i></a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                @endforeach
              @endif
              @if(isset($members_active))
                @foreach($members_active as $member)
                        <div class="col-md-3">
                            <div class="card project-card participant">
                            <div class="participant-img">
                                <img class="card-img-top" src="{{$member->profile->image_192}}" alt="Card image cap">
                            </div>
                            <div class="card-block project-card-block">
                                <p class="card-text">{{$member->profile->real_name_normalized}}</p>
                                @if(isset($member->profile->title))
                                    @if(strlen($member->profile->title)>15)
                                    <p class="card-text2">{{substr($member->profile->title,0,20)}}</p>
                                    @else
                                <p class="card-text2">{{$member->profile->title}}</p>
                                @endif
                                @else
                                <p class="card-text2">...</p>
                                @endif
                                <div class="row details">
                                    <div class="col-xs-6">
                                        <p class="slackId text-left">{{$member->name}}</p>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="#"> <i class="fa fa-user fonta"></i></a>
                                        <a href="#"> <i class="fa fa-envelope fonta"></i></a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                @endforeach
              @endif
              @if(isset($members_deleted))
                @foreach($members_deleted as $member)
                        <div class="col-md-3">
                            <div class="card project-card participant">
                            <div class="participant-img">
                                <img class="card-img-top" src="{{$member->profile->image_192}}" alt="Card image cap">
                            </div>
                            <div class="card-block project-card-block">
                                <p class="card-text">{{$member->profile->real_name_normalized}}</p>
                                @if(isset($member->profile->title))
                                    @if(strlen($member->profile->title)>15)
                                    <p class="card-text2">{{substr($member->profile->title,0,20)}}</p>
                                    @else
                                <p class="card-text2">{{$member->profile->title}}</p>
                                @endif
                                @else
                                <p class="card-text2">...</p>
                                @endif
                                <div class="row details">
                                    <div class="col-xs-6">
                                        <p class="slackId text-left">{{$member->name}}</p>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="#"> <i class="fa fa-user fonta"></i></a>
                                        <a href="#"> <i class="fa fa-envelope fonta"></i></a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                @endforeach
              @endif
              @if(isset($user))
              <div class=" member">
                            <div class="member-img">
                                <img class="card-img-top" src="{{$user->profile->image_192}}" alt="Card image cap">
                            </div>
                            <div class="member-block">
                                <p class="card-text">{{$user->profile->real_name_normalized}}</p>
                                @if(isset($user->profile->title))
                                   
                                <p class="card-text2">{{$user->profile->title}}</p>
    
                                @else
                                <p class="card-text2">...</p>
                                @endif
                                <div class="row details">
                                    <div class="col-xs-6">
                                        <p class="slackId text-left">Slack id: @ {{$user->name}}</p>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="#"> <i class="fa fa-user fonta"></i></a>
                                        <a href="#"> <i class="fa fa-envelope fonta"></i></a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    @else
                       <h2 class="error"> {{$error}}</h2>
                    @endif
        
           
            </div>
        </div>
        <hr>
        <nav aria-label="Page navigation example" class="pageChange">
        @if(isset($members))
        {{ $members->appends(Request::except('page'))->render() }}
        @endif
        @if(isset($members_active))
        {{ $members_active->appends(Request::except('page'))->render() }}
        @endif
        @if(isset($members_deleted))
        {{ $members_deleted->appends(Request::except('page'))->render() }}
        @endif
        </nav>
        <hr>
      </div>
    </section>

<hr>

@endsection