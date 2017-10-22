@extends('layouts.app')

@section('title')
    Supporters
@endsection

@section('body')
<section class="container-fuild content supporters-bg">
    <div id="startchange"></div>
    <h1 class="lead text-center supporters-bg__h1">THANK YOU SO MUCH!</h1>
    <div class="row text-center">
      <div class="col-md-4">
        <img src="./img/icons/ibm.png" class=" img-fluid supporters-bg__image">
      </div>
      <div class="col-md-4">
        <img src="./img/icons/amazon.png" class=" img-fluid supporters-bg__image">
      </div>
      <div class="col-md-4">
        <img src="./img/icons/andela.png" class=" img-fluid supporters-bg__image">
      </div>
      <div class="col-md-4">
        <img src="./img/icons/cchub.png" class=" img-fluid supporters-bg__image">
      </div>
      <div class="col-md-4">
        <img src="./img/icons/cisco.png" class=" img-fluid supporters-bg__image">
      </div>
      <div class="col-md-4">
        <img src="./img/icons/forloop.png" class=" img-fluid supporters-bg__image">
      </div>
      <div class="col-md-4">
        <img src="./img/icons/flutterwave.png" class=" img-fluid supporters-bg__image">
      </div>
      <div class="col-md-4">
        <img src="./img/icons/intel.png" class=" img-fluid supporters-bg__image">
      </div>
      <div class="col-md-4">
        <img src="./img/icons/paystack.png" class=" img-fluid supporters-bg__image">
      </div>
      <div class="col-md-4">
        <img src="./img/icons/microsoft.png" class=" img-fluid supporters-bg__image">
      </div>
      <div class="col-md-4">
        <img src="./img/icons/mtn.png" class=" img-fluid supporters-bg__image">
      </div>
      <div class="col-md-4">
        <img src="./img/icons/sony.png" class=" img-fluid supporters-bg__image">
      </div>
    </div>
  </section>
  <section class="container">
    <div class="row">
      <div class="col-md-6 home-git">
        <h2>GET IN TOUCH</h2>
        <p>Hello, do you have enquiries to make or even complaints. Be assured of our immediate response. We are available 24/7 to talk to you. Feel free to Email, call or visit us. Our Contact details below.
        </p>
        <address>
          <div>
            <i class="fa fa-envelope"> </i>
            <p>reservations@hotels.ng</p>
          </div>
          <div class="clearfix"></div>
          <div>
            <i class="fa fa-phone"> </i>
            <p> 0700 880 8800</p>
          </div>
          <div class="clearfix"></div>
          <div>
            <i class="fa fa-map-marker"> </i>
            <p> No 3, Birrel Avenue, Off Herbert Macaulay way, Sabo, Yaba Lagos.</p>
          </div>
          <div class="clearfix"></div>
        </address>
      </div>
      <div class="col-md-6 contact-form">
        <h2>TALK TO US</h2>
        <form>
          <input type="text" name="" placeholder="Your name.." class="form-control">
          <input type="text" name="" placeholder="Your Email.." class="form-control">
          <textarea placeholder="Your message.." class="form-control"></textarea>
          <input type="submit" name="" class="btn btn-block btn-primary" value="submit">
        </form>
      </div>
    </div>
  </section>
@endsection