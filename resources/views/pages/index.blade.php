@extends('layouts.app')

@section('title')
    Home
@endsection

@section('body')
        
<section class="container-fuild" class="landing-page">
  <div id="home-landing">
   <div class="container">
    <div id="startchange"></div>
    <div class="row  landing-details">
     <div class="col-md-4">
       <img src="img/logo.png" class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay=".3s">
       <h1 class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay=".6s">Lets move from <strong>just</strong> to <strong>Experts</strong></h1>
       <p class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay=".9s">hng remote internship program founded in 2016 to develop world class developers in Nigeria</p>
       <button class="btn btn-primary btn-block os-animation" data-os-animation="fadeInLeft" data-os-animation-delay=".9s" >Join Us Today!</button>
     </div>
     <div class="col-md-4"></div>
     <div class="col-md-4 offset-md-4 os-animation" data-os-animation="bounceInRight" data-os-animation-delay=".9s">
        <p class="home-participant">Over <span>1000</span> participants</p>
     </div>
   </div>
  </div>
  </div>  
</section>
<section class="jumbotron">
  <div class="container">
      <div class="row text-center">
          <div class="col-md-4 os-animation" data-os-animation="bounceInRight" data-os-animation-delay=".3s">
              <img src="img/rm1.png">
              <p>Remote Internship</p>
          </div>
            <div class="col-md-4 os-animation" data-os-animation="bounceInRight" data-os-animation-delay=".6s">
              <img src="img/rm2.png">
              <p>Remote Internship</p>
          </div>
            <div class="col-md-4 os-animation" data-os-animation="bounceInRight" data-os-animation-delay=".9s">
              <img src="img/rm3.png">
              <p>Real world tasks</p>
          </div>
      </div>
  </div>
</section>
<section class="container home-about" >
    <div class="row">
      <div class="col-md-6 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay=".3s">
          <img src="img/video.png">
      </div>
      <div class="col-md-6 os-animation" data-os-animation="fadeInRight" data-os-animation-delay=".6s">
         <h2><a href="#">About Hng Internship</a></h2>
         <p>We get people who are ready to work in an enviroment where they have
to tackle real work issues. With minimal guidance, instinct kicks in and
the best ones come out of the lot and start the second phase of the
internship where the tasks get increasingly harder. Hng internship was
founded in 2016 to develop world class developers in Nigeria.

They eventually get placed into companies that are looking for software
developers. We get people who are interested in technology and simulate
a working environment.</p>
      </div>
    </div>
</section>

<section class="container-fuild text-center" id="home-iotw">
    <div class="container">
      <div class="cover"></div>
      <h2>INTERNS OF THE WEEK</h2>
    </div>
    <div class="row">
        <div class="">
          
        </div>
    </div>
</section>

@endsection