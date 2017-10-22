@extends('layouts.app')

@section('title')
    Contact
@endsection

@section('body')
  <!--  Banner image -->
  <div class="container-fluid contact__hero content">
  <img src="img/contact-banner.png" class="img-fluid">
</div>

<!-- end banner image -->
<!--   main-->
<section class="container-fluid content">
  <div class="row justify-content-center" style="margin-top:-10px;">
    <div class="col-sm-4">
      <img class="img-fluid" src="img/contact-pic.png" style="width:100%;height:400px">
    </div>
    <div class="col-sm-6" id="map" style="width:100%;height:400px;background-color:grey;">
      <!-- <div id="map" style="width:100%;height:400px;background-color:grey;"></div> -->
    </div>
  </div>
</section>
@endsection