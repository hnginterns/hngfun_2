<?php $__env->startSection('title'); ?>
    About
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<div id="startchange"></div>
    <section class="container-fluid content">
      
    	<div class="about-us">
    		<h1 >About Us</h1>
        <div></div>
    	</div>
    	
    </section>

<section class="container text-center">
			<h2>Our Mission</h2>
			 <p class="m-text">
				We get people who are ready to work in an enviroment where they have to tackle real work issues. With minimal guidance, instinct kicks in and the best ones come out of the lot and start the second phase of the internship where the tasks get increasingly harder.
      </p>
</section>
<section class="container ">
	<div class="row about-2">
		<div class="col-md-4">
			 <h2>Founded in 2016</h2>
			<p>Hng internship was founded in 2016 to develop world class developers in Nigeria.</p>	
			
		</div>

		<div class="col-md-4">
      <h2>Trained Developers 5000+</h2>
			<p>We get people who are interested in technology and simulate a working environment..</p>
		</div>
		<div class="col-md-4">
			<h2>
				Placement Track 90%</h2>
			<p>They eventually get placed into companies that are looking for software developers.	</p>
		</div>
  </div>
</section>
<section class="container-fluid about-ourstory">
      <div class="container-fluid  about-cover"></div>
      <div class="row our-story" >
      <div class="col-md-4 ">
          <h2>Our Story</h2>
          <p>
            We get people who are ready to work in an enviroment where they have to tackle real work issues. With minimal guidance, instinct kicks in and the best ones come out of the lot and start the second phase of the internship where the tasks get increasingly harder.
          </p>
      </div>
    </div>
</section>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>