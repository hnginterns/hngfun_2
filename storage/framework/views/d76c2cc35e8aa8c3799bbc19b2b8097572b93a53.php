

<?php $__env->startSection('title'); ?>
    Participant
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<section class="container-fuild content text-center">
  <div class="jumbotron bg-image">
   <img class="" src="<?php echo e(URL::asset('img/logo.png')); ?>" alt="Cross section of participants" id="logo">
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
        <a href="<?php echo e(url('participants/active')); ?>">active<a>
        <!--first profile row-->
    <div class="container">
        <div class ="row  justify-content-center text-center profileRow">
        
              <?php if(isset($memberstoshow)): ?>
                <?php $__currentLoopData = $memberstoshow; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3">
                            <div class="card project-card participant">
                            <div class="participant-img">
                                <img class="card-img-top" src="<?php echo e($member->profile->image_192); ?>" alt="Card image cap">
                            </div>
                            <div class="card-block project-card-block">
                                <p class="card-text"><?php echo e($member->profile->real_name_normalized); ?></p>
                                <?php if(isset($member->profile->title)): ?>
                                    <?php if(strlen($member->profile->title)>15): ?>
                                    <p class="card-text2"><?php echo e(substr($member->profile->title,0,20)); ?></p>
                                    <?php else: ?>
                                <p class="card-text2"><?php echo e($member->profile->title); ?></p>
                                <?php endif; ?>
                                <?php else: ?>
                                <p class="card-text2">...</p>
                                <?php endif; ?>
                                <div class="row details">
                                    <div class="col-xs-6">
                                        <p class="slackId text-left"><?php echo e($member->name); ?></p>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="#"> <i class="fa fa-user fonta"></i></a>
                                        <a href="#"> <i class="fa fa-envelope fonta"></i></a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
           
            </div>
        </div>
        <nav aria-label="Page navigation example" class="pageChange">
           <ul class="pagination justify-content-end">
                <?php if($pages > 1): ?>
              <li class="page-item disabled"><a class="page-link" href="<?php echo e(route('/participants/1')); ?>">1</a></li>
              <li class="page-item disabled"><a class="page-link" href="#" >...</a></li>
                <?php endif; ?>
                <?php for($i=$pages;$i <5;$i++): ?>
                    <?php if($start ==$pages): ?>
                    <li class="page-item  active"><a class="page-link" href="<?php echo e(url('/participants/'.$i)); ?>" id="no"><?php echo e($i); ?></a></li>
                     <?php endif; ?>
                <li class="page-item"><a class="page-link" href="<?php echo e(url('/participants/'.$i)); ?>" id="no"><?php echo e($i); ?></a></li>
              <?php endfor; ?>
              </ul>
        </nav>
      </div>
    </section>

<hr>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>