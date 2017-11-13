<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Hng Fun | slack Invite Page</title>
    <!-- Required meta tags -->
	<link rel="icon" href="favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script> 
	
	
	<style>
		body{
			background-color: #2092E3;
			margin:0;
			padding:0;
		}

#invite-logo{
	width: 20%;
}
.rect1 {
	height:auto;
}
.alert {
	width:30%;
}
@media only screen and (max-width: 738px) {
	#logo{
		width: 40%;
	}
}
.rect1{
	padding-left: 5%;
	padding-top: 5%;
}
#invite-footer{
	background-color: #FFFFFF;
	padding: 2% 6%;
	margin:0;
}
#invite-footer img{
	height: 30px;
	margin-right: 10px;
}
#text,#paragraph1{
    color: #ffffff;
}
#link{
    color: #000000;
	text-decoration: underline;
}
#btn{
	background-color: #FFFFFF;
	color: #000000;
	cursor: pointer;
}
#btn:hover{
	border-style: solid;
	border-width: 1px;
	border-color: #777777;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 3px 10px 0 rgba(0, 0, 0, 0.09);
}
#staticEmail2{
	background-color: transparent;
	border: 1px solid #ffffff;
	color: #f2f2f2;
}
#staticEmail2::-webkit-input-placeholder {
    color: #f5f5f5;
}
    </style>
            </head>

<body>
    <div class="container-fluid">
        <div class="rect1">
			<img class="" id="invite-logo" src="img/hngfun_logo.png">
			<br />
			<h1 id="text">Join our #Slack community</h1><br />
			<p id="paragraph1">Meet with other hngfun users, be updated on the newest releases and<br />
            be able to reach out to our core team 24/7.</p><br />
            <form id="frm" class="form-inline" method="post" action="{{url('/sendinvite')}}">
				{{csrf_field()}}
                    <div class="form-group">
                        <input name ="email" type="text" class="form-control" id="staticEmail2" placeholder="Email Address">
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit" id="btn" class="btn btn-primary">Join now</button>
				</form><br />
				@if (Session::has('message-error'))
					<div class="alert alert-danger">{{Session::get('message-error')}}</div>
				@endif
				@if (Session::has('message'))
					<div class="alert alert-success">{{Session::get('message')}}</div>
				@endif
                <p id="paragraph1">Already part of the group? <a id="link" href="https://hnginterns.slack.com" >Sign in here.</a></p>
        </div>
        <footer>
			<div id="invite-footer">
				<p><a href = "https://twitter.com/" target = "_blank"><img src="img/twitter.png" class = "icon"></a>
					<a href = "https://facebook.com/" target = "_blank"><img src="img/facebook.png" class = "icon"></a>
					<a href = "https://github.com/" target = "_blank"><img src="img/github2.png" class = "icon"></a>
				</p></br>
                <p>&copy; hngfun &nbsp;&nbsp; &#124; &nbsp;&nbsp; Layout credits: HNG TECH</p>
			</div>
		
        </footer>

    </div>
</body>

</html>