<?php
$dir = "/files/sliderimages/*.jpg";
//get the list of all files with .jpg extension in the directory and safe it in an array named $images
$images = glob( $dir );
?>

<section class="bg-white">
  <div class="home-banner">
    <div class="row align-items-center">

      <div class="col-md-12 col-lg-12">
        <div class="videoslider slidenav-left owl-carousel owl-theme" id="videoslide">

        <?php $__currentLoopData = File::glob(public_path('files/1/sliderimages').'/*'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $path): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="video-box">
				  <div class="banner-content">
					 <h2>FUTURE PROOF YOUR SKILLS FOR A FAST CHANGING WORKPLACE</h2>
				   </div>
					<div class="single-popup-wrap">
						<img class="img-fluid" src="<?php echo e(str_replace(public_path(), '', $path)); ?>" alt="">
					</div>
             </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


      </div>
    </div>
  </div>
</div>
</section



<?php /**PATH /Applications/MAMP/htdocs/larablog-master/resources/views/blog/partials/header.blade.php ENDPATH**/ ?>