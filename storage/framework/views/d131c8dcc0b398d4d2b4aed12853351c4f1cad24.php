<?php $__env->startSection('title'); ?>
    Contact
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>