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
            <input type="text" class="form-control" placeholder="Search by participants name or slack username" aria-label="Search for..." id="textHolder">
              <span class="input-group-btn">
                <button class="btn " type="button" id="searchbutton">Search</button>
              </span>
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
		    <p class="about">About 2,500 participants in total</p>
	    </div>
        <div class="row">
        	<div class="col-sm-1 text-center">
        			<p>sort by</p>
        	</div>
        		<div class="col-sm-1.5">
        	   		<div class="dropdown">
                  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Latest input</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">...</a></div>
                    </div>
        		</div>
        		<div class="col-sm-1.5">
        	   		<div class="dropdown">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Descending</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">...</a>
                        </div>
                    </div>
        		</div>
        	<div class="col-sm-1.5 text-center display">
        		<p>display</p>
        	</div>
        	    <div class="col-sm-2">
        	   		<div class="dropdown">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">grid</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">...</a>
                        </div>
                    </div>
        		</div>
        </div>
        <a href="{{url('participants/active')}}">active<a>
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
        </nav>
        <hr>
      </div>
    </section>

<hr>

@endsection