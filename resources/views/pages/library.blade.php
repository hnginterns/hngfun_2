@extends('layouts.app')

@section('title')
    Library
@endsection

@section('body')
<main>
    <div class="overlay">
      <div class="container">
        <!-- hero logo -->
        <div class="row">
          <div class="col-md-4 mx-auto">
            <img src="https://scontent-bru2-1.xx.fbcdn.net/v/t1.0-9/22491463_1477853922310712_7710764365830306264_n.jpg?oh=0100a8f9d73d1dcbb4f69d696141efea&oe=5A874871" class="img-fluid" alt="">
          </div>
        </div>
        <!-- end hero logo -->
        <!-- icons section  -->
        <div class=" symb row align-items-center">
          <div class="col-md-3 text-center">
            <div class="p-5">
              <a href="#"> 
                <img class="img-fluid rounded-circle" src="img/code.png" alt=""> 
              </a>
              <p class="text-white">Front-end</p>
            </div>
          </div>
          <div class="col-md-3 text-center">
            <div class="p-5">
              <a href="#">
                <img class="img-fluid rounded-circle" src="img/backend.png" alt="">
              </a>
              <p class="text-white">Back-end</p>
            </div>
          </div>
          <div class="col-md-3 text-center">
            <div class="p-5">
              <a href="#">
                <img class="img-fluid rounded-circle" src="img/github.png" alt="">
              </a>
              <p class="text-white">Version Control</p>
            </div>
          </div>
          <div class="col-md-3 text-center">
            <div class="p-5">
              <a href="#">
                <img class="img-fluid rounded-circle" src="img/draw.png" alt="">
              </a>
              <p class="text-white">Design</p>
            </div>
          </div>
        </div>
        <br>
        <div class="text-white h4 row">
        <div class="col-md-12 mx-auto text-center">Quality Resources, All In One Place</div>
        </div>
        <!-- end icons section -->
      </div>
    </div>
  </main>
  <!--search -->
  <div class="container library-search">
    <div class="input-group col-md-6 srch">
      <input class="form-control" placeholder="Search">
      <div class="input-group-addon srch_icon"><i class="fa fa-search"></i></div>
    </div>
     <div class="mydiv">
      <input class="btn-img" type="image" src="img/html5.png">
      <input class="btn-img" type="image" src="img/github1.png">
      <input class="btn-img" type="image" src="img/android.png">
      <input class="btn-img" type="image" src="img/css3.png">
      <input class="btn-img" type="image" src="img/tech.png">
    </div>
  </div>
  <!-- end search section -->
  <!--daily tips carousel section-->
  <section class="library-tips">
  <h2 class="text-center">DAILY TIPS</h2>
    <div class="container">
      <div class="main_product roomy-80">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="slides-container">
            <div class="carousel-inner library-carousel" role="listbox">
              <div class="carousel-item active text-center">
                <p>
                  <em>"No matter how many times you get it wrong, keep working at it, a good design comes through experience"</em>
                  <br>
                  <strong>-Mark Essien</strong>
                </p>
              </div>
              <div class="carousel-item text-center">
                <p>
                  <em>"No matter how many times you get it wrong, keep working at it, a good design comes through experience"</em>
                  <br>
                  <strong>-Mark Essien</strong>
                </p>
               </div>
              <div class="carousel-item text-center">
                <p>
                  <em>"No matter how many times you get it wrong, keep working at it, a good design comes through experience"</em>
                  <br>
                  <strong>-Mark Essien</strong>
                </p>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
       </div>
      <!-- End off row -->
    </div>
    <!-- End off container -->
  </section>
  <!-- End off daily tips carousel section -->
  <div class="container">
    <div class="text-grey h4 row">
      <div class="col-md-12 mx-auto library__hng-text text-center">
        <P>
          <h1>MOST RECENT</h1></P>
      </div>
    </div>
  </div>
  <div class="mybackground">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-special">
          <div class="col-top primary d-flex">
            <span class="justify-content-center align-self-center font-weight-bold">typography Tutorials, 10 rules to help you</span>
          </div>
          <div class="col-bottom plain font-weight-bold">
            <a href="#">Read More</a>
          </div>
        </div>
        <div class="col-sm-4 col-special">
          <div class="plain col-top d-flex">
            <span class="justify-content-center align-self-center font-weight-bold ">9 signs that a programming carrer may be good you</span>
          </div>
          <div class="col-bottom primary font-weight-bold">
            <a href="#">Read More</a>
          </div>
        </div>
        <div class="col-sm-4 col-special">
          <div class="col-top primary d-flex">
            <span class="justify-content-center align-self-center font-weight-bold">typography Tutorials, 10 rules to help you</span>
          </div>
          <div class="col-bottom plain font-weight-bold">
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 col-special">
          <div class="plain col-top d-flex">
            <span class="justify-content-center align-self-center font-weight-bold">9 signs that a programming carrer may be good you</span>
          </div>
          <div class="col-bottom primary font-weight-bold">
            <a href="#">Read More</a>
          </div>
        </div>
        <div class="col-sm-4 col-special">
          <div class="col-top primary d-flex">
            <span class="justify-content-center align-self-center font-weight-bold">typography Tutorials, 10 rules to help you</span>
          </div>
          <div class="col-bottom plain font-weight-bold">
            <a href="#">Read More</a>
          </div>
        </div>
        <div class="col-sm-4 col-special">
          <div class="plain col-top d-flex">
            <span class="justify-content-center align-self-center font-weight-bold">9 signs that a programming carrer may be good you</span>
          </div>
          <div class="col-bottom primary font-weight-bold">
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
    </div><br>
<!-- Pagination -->
 <nav aria-label="Page navigation example">
    <ul class="pagination pagination-lg justify-content-center">
      <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
     <span aria-hidden="true">&laquo;</span>
     <span class="sr-only">Previous</span>
    </a>
   </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">4</a></li>
      <li class="page-item"><a class="page-link" href="#">5</a></li>
      <li class="page-item"><a class="page-link" href="#">6</a></li>
      <li class="page-item">
    <a class="page-link" href="#" aria-label="Next">
   <span aria-hidden="true">&raquo;</span>
  <span class="sr-only">Next</span>
  </a>
  </li>
  </ul>
  </nav>
</div>
  <div class="container">
    <div class="text-grey h4 row">
      <div class="col-md-12 mx-auto library__hng-text">
        <P>
          <h1>TECHNICAL ARTICLE BY INTERNS</h1></P>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-2 order-1">
        <div class="p-2">
          <img class="img-fluid rounded-circle" src="img/mofope.png" alt="">
        </div>
      </div>
      <div class="col-md-10 order-2">
        <div class="p-5">
          <h2 class="display-8">@mofope_ojosh...</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
        </div>
      </div>
    </div>
  </div>
  </section>
  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-2 order-1">
          <div class="p-2">
            <img class="img-fluid rounded-circle" src="img/mofope.png" alt="">
          </div>
        </div>
        <div class="col-md-10 order-2">
          <div class="p-5">
            <h2 class="display-5">@mofope_ojosh...</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-2 order-1">
          <div class="p-2">
            <img class="img-fluid rounded-circle" src="img/mofope.png" alt="">
          </div>
        </div>
        <div class="col-md-10 order-2">
          <div class="p-5">
            <h2 class="display-8">@mofope_ojosh...</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
          </div>
        </div>
      </div>
      <div class="panel">
          <div class="col-md-12 text-right">
            <button type="button" class="btn btn-primary btn-lg ml-5">View All</button>
             <br><br>
          </div>
      </div> 
    </div>
  <hr>
   </section>
  
@endsection