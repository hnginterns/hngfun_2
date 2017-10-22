@extends('layouts.app')

@section('title')
    Task
@endsection

@section('body')
<section class="container-fuild content taskpage-header">
      <div id="startchange"></div>
          <div></div>
          <h1>Tasks</h1>
      </section>
            <div class="container">
              <form class="form-inline">
                    <input class="form_search" type="text" class="form-control" placeholder="Search for task" id="searchbox">
               </form>
            </div>
          <section class="container">
            <div class ="row  justify-content-center">
                <div class="col-md-4">
                <div class="card project-card" id="myBtn1">
                  <div class="card-block project-card-block">
                    <div class="card-title ">
                      <h5 class="project-title">Stage 1<h5>
                        <h5 class="card-title project-date">14th September, 2017</h5>
                    </div>
                    <div class="card-block project-card-block">
                        <p class="card-text">Set your picture and name on the Slack channel  Setup a github accountInstall git and get git running on your system</p>
                        <hr class="bigHr">
                        <img src="img/mark.jpg" class="img-circle" alt="Card image cap" width="100" height="100">
                        <h5>Mark Essien</h5>
                        <h6>CEO</h6>
        				    </div>
                  </div>
               </div>
              </div>
              <div class="col-md-4">
                <div class="card project-card" id="myBtn2">
                  <div class="card-block project-card-block">
                    <div class="card-title ">
                      <h5 class="project-title">Stage 2<h5>
                        <h5 class="card-title project-date">14th September, 2017</h5>
                    </div>
                    <div class="card-block project-card-block">
                        <p class="card-text">Set your picture and name on the Slack channel  Setup a github accountInstall git and get git running on your system</p>
                        <hr class="bigHr">
                        <img src="img/mark.jpg" class="img-circle" alt="Card image cap" width="100" height="100">
                        <h5>Mark Essien</h5>
                        <h6>CEO</h6>
                    </div>
                  </div>
               </div>
              </div>
              <div class="col-md-4">
                <div class="card project-card" id="myBtn3">
                  <div class="card-block project-card-block">
                    <div class="card-title ">
                      <h5 class="project-title">Stage 3<h5>
                        <h5 class="card-title project-date">14th September, 2017</h5>
                    </div>
                    <div class="card-block project-card-block">
                        <p class="card-text">Set your picture and name on the Slack channel  Setup a github accountInstall git and get git running on your system</p>
                        <hr class="bigHr">
                        <img src="img/mark.jpg" class="img-circle" alt="Card image cap" width="100" height="100">
                        <h5>Mark Essien</h5>
                        <h6>CEO</h6>
                    </div>
                  </div>
               </div>
              </div>
              <div class="col-md-4">
                <div class="card project-card" id="myBtn4">
                  <div class="card-block project-card-block">
                    <div class="card-title ">
                      <h5 class="project-title">Stage 4<h5>
                        <h5 class="card-title project-date">14th September, 2017</h5>
                    </div>
                    <div class="card-block project-card-block">
                        <p class="card-text">Set your picture and name on the Slack channel  Setup a github accountInstall git and get git running on your system</p>
                        <hr class="bigHr">
                        <img src="img/mark.jpg" class="img-circle" alt="Card image cap" width="100" height="100">
                        <h5>Mark Essien</h5>
                        <h6>CEO</h6>
                    </div>
                  </div>
               </div>
              </div>
              <div class="col-md-4">
                <div class="card project-card" id="myBtn5">
                  <div class="card-block project-card-block">
                    <div class="card-title ">
                      <h5 class="project-title">Stage 5<h5>
                        <h5 class="card-title project-date">14th September, 2017</h5>
                    </div>
                    <div class="card-block project-card-block">
                        <p class="card-text">Set your picture and name on the Slack channel  Setup a github accountInstall git and get git running on your system</p>
                        <hr class="bigHr">
                        <img src="img/mark.jpg" class="img-circle" alt="Card image cap" width="100" height="100">
                        <h5>Mark Essien</h5>
                        <h6>CEO</h6>
                    </div>
                  </div>
               </div>
              </div>
              <div class="col-md-4">
                <div class="card project-card" id="myBtn6">
                  <div class="card-block project-card-block">
                    <div class="card-title ">
                      <h5 class="project-title">Stage 6<h5>
                        <h5 class="card-title project-date">14th September, 2017</h5>
                    </div>
                    <div class="card-block project-card-block">
                        <p class="card-text">Set your picture and name on the Slack channel  Setup a github accountInstall git and get git running on your system</p>
                        <hr class="bigHr">
                        <img src="img/mark.jpg" class="img-circle" alt="Card image cap" width="100" height="100">
                        <h5>Mark Essien</h5>
                        <h6>CEO</h6>
                    </div>
                  </div>
               </div>
              </div>
              <div class="col-md-4">
                <div class="card project-card" id="myBtn7">
                  <div class="card-block project-card-block">
                    <div class="card-title ">
                      <h5 class="project-title">Stage 7<h5>
                        <h5 class="card-title project-date">14th September, 2017</h5>
                    </div>
                    <div class="card-block project-card-block">
                        <p class="card-text">Set your picture and name on the Slack channel  Setup a github accountInstall git and get git running on your system</p>
                        <hr class="bigHr">
                        <img src="img/mark.jpg" class="img-circle" alt="Card image cap" width="100" height="100">
                        <h5>Mark Essien</h5>
                        <h6>CEO</h6>
                    </div>
                  </div>
               </div>
              </div>
            </div>
        </section>
      <!-- Modal -->
      <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog">

    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="padding:35px 50px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="filehead"><span class="glyphicon glyphicon-file"></span></h4>
                    </div>
        <div class="modal-body" style="padding:40px 50px;">
            <form role="form">
                <div class="form-group">
                  <img src="img/mark.jpg" class="img-circle" alt="Card image cap" width="100" height="100">
                  <label for="usrname">Seyi Onifade<br>Co-ordinator<br>13th-September-2017</label>
                </div>
            <div class="form-group">
                    <center><h5><strong>HNG Internship: Stage 2</strong></h5></center>
                    <ol>
                    <li>Set your picture and name on the Slack channel</li>
                    <li>Setup a github account</li>
                    <li>Install git and get git running on your system</li>
                    <li>Make a figma account</li>
                    <li>Download and install WAMP, LAMP or equivalent</li>
                    <li>Ask xyluz to add you to the github organisation</li>
                    <li>Add your name to the contributors file: Full name, Slack Name and github name, comma delimited</li>
                    <li>Join the #stage1 channel on Slack</li>
                    <li>Proceed to do #stage3</li>
                    </ol>
                </div>
                    </form>
                        </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
            </div>
          </div>
        </div>
      </div> 
    </div>
        
				  </div>
    <!-- Modal -->
      <div class="modal fade" id="myModal3" role="dialog">
        <div class="modal-dialog">

    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="padding:35px 50px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="filehead"><span class="glyphicon glyphicon-file"></span></h4>
                    </div>
        <div class="modal-body" style="padding:40px 50px;">
            <form role="form">
                <div class="form-group">
                  <img src="img/mark.jpg" class="img-circle" alt="Card image cap" width="100" height="100">
                  <label for="usrname">Seyi Onifade<br>Co-ordinator<br>13th-September-2017</label>
                </div>
            <div class="form-group">
                    <center><h5><strong>HNG Internship: Stage 3</strong></h5></center>
                    <ol>
                    <li>Set your picture and name on the Slack channel</li>
                    <li>Setup a github account</li>
                    <li>Install git and get git running on your system</li>
                    <li>Make a figma account</li>
                    <li>Download and install WAMP, LAMP or equivalent</li>
                    <li>Ask xyluz to add you to the github organisation</li>
                    <li>Add your name to the contributors file: Full name, Slack Name and github name, comma delimited</li>
                    <li>Join the #stage1 channel on Slack</li>
                    <li>Proceed to do #stage4</li>
                    </ol>
                </div>
                    </form>
                        </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
            </div>
          </div>
        </div>
      </div> 
    </div>
				  </div>
			<!-- Modal -->
      <div class="modal fade" id="myModal4" role="dialog">
        <div class="modal-dialog">

    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="padding:35px 50px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="filehead"><span class="glyphicon glyphicon-file"></span></h4>
                    </div>
        <div class="modal-body" style="padding:40px 50px;">
            <form role="form">
                <div class="form-group">
                  <img src="img/mark.jpg" class="img-circle" alt="Card image cap" width="100" height="100">
                  <label for="usrname">Seyi Onifade<br>Co-ordinator<br>13th-September-2017</label>
                </div>
            <div class="form-group">
                    <center><h5><strong>HNG Internship: Stage 4</strong></h5></center>
                    <ol>
                    <li>Set your picture and name on the Slack channel</li>
                    <li>Setup a github account</li>
                    <li>Install git and get git running on your system</li>
                    <li>Make a figma account</li>
                    <li>Download and install WAMP, LAMP or equivalent</li>
                    <li>Ask xyluz to add you to the github organisation</li>
                    <li>Add your name to the contributors file: Full name, Slack Name and github name, comma delimited</li>
                    <li>Join the #stage1 channel on Slack</li>
                    <li>Proceed to do #stage5</li>
                    </ol>
                </div>
                    </form>
                        </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
            </div>
          </div>
        </div>
      </div> 
    </div>
       
				  </div>
    <!-- Modal -->
      <div class="modal fade" id="myModal5" role="dialog">
        <div class="modal-dialog">

    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="padding:35px 50px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="filehead"><span class="glyphicon glyphicon-file"></span></h4>
                    </div>
        <div class="modal-body" style="padding:40px 50px;">
            <form role="form">
                <div class="form-group">
                  <img src="img/mark.jpg" class="img-circle" alt="Card image cap" width="100" height="100">
                  <label for="usrname">Seyi Onifade<br>Co-ordinator<br>13th-September-2017</label>
                </div>
            <div class="form-group">
                    <center><h5><strong>HNG Internship: Stage 5</strong></h5></center>
                    <ol>
                    <li>Set your picture and name on the Slack channel</li>
                    <li>Setup a github account</li>
                    <li>Install git and get git running on your system</li>
                    <li>Make a figma account</li>
                    <li>Download and install WAMP, LAMP or equivalent</li>
                    <li>Ask xyluz to add you to the github organisation</li>
                    <li>Add your name to the contributors file: Full name, Slack Name and github name, comma delimited</li>
                    <li>Join the #stage1 channel on Slack</li>
                    <li>Proceed to do #stage6</li>
                    </ol>
                </div>
                    </form>
                        </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
            </div>
          </div>
        </div>
      </div> 
    </div>
        
				  </div>
				  <!-- Modal -->
              <div class="modal fade" id="myModal6" role="dialog">
                <div class="modal-dialog">

            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="padding:35px 50px;">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="filehead"><span class="glyphicon glyphicon-file"></span></h4>
                            </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form role="form">
                        <div class="form-group">
                          <img src="img/mark.jpg" class="img-circle" alt="Card image cap" width="100" height="100">
                          <label for="usrname">Seyi Onifade<br>Co-ordinator<br>13th-September-2017</label>
                        </div>
                    <div class="form-group">
                            <center><h5><strong>HNG Internship: Stage 6</strong></h5></center>
                            <ol>
                            <li>Set your picture and name on the Slack channel</li>
                            <li>Setup a github account</li>
                            <li>Install git and get git running on your system</li>
                            <li>Make a figma account</li>
                            <li>Download and install WAMP, LAMP or equivalent</li>
                            <li>Ask xyluz to add you to the github organisation</li>
                            <li>Add your name to the contributors file: Full name, Slack Name and github name, comma delimited</li>
                            <li>Join the #stage1 channel on Slack</li>
                            <li>Proceed to do #stage7</li>
                            </ol>
                        </div>
                            </form>
                                </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
                
            </script>
				  </div>
      <!--  MODALS  -->
      <!-- Modal -->
      <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog">

    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="padding:35px 50px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="filehead"><span class="glyphicon glyphicon-file"></span></h4>
                    </div>
        <div class="modal-body" style="padding:40px 50px;">
            <form role="form">
                <div class="form-group">
                  <img src="img/mark.jpg" class="img-circle" alt="Card image cap" width="100" height="100">
                  <label for="usrname">Seyi Onifade<br>Co-ordinator<br>13th-September-2017</label>
                </div>
            <div class="form-group">
                    <center><h5><strong>HNG Internship: Stage 1</strong></h5></center>
                    <ol>
                    <li>Set your picture and name on the Slack channel</li>
                    <li>Setup a github account</li>
                    <li>Install git and get git running on your system</li>
                    <li>Make a figma account</li>
                    <li>Download and install WAMP, LAMP or equivalent</li>
                    <li>Ask xyluz to add you to the github organisation</li>
                    <li>Add your name to the contributors file: Full name, Slack Name and github name, comma delimited</li>
                    <li>Join the #stage1 channel on Slack</li>
                    <li>Proceed to do #stage2</li>
                    </ol>
                </div>
                    </form>
                        </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
            </div>
          </div>
        </div>
      </div> 
    </div>
        
        </div>
        <hr>

@endsection