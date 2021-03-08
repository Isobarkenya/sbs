<?php $__env->startSection('template_title'); ?>
    <?php echo e(trans('Safaricom SBS')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('template_description'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_title'); ?>
    <?php echo e(trans('Safaricom SBS')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<section class="bg-white">
  <div class="home-banner">
    <div class="row align-items-center">

      <div class="col-md-12 col-lg-12">
        <div class="videoslider">

            <div class="video-box">
				  <div class="banner-content">
					 <h2>#1MoreSkill</h2>
					  <h3>Our Digital Development Journey.</h3>
				   </div>
					<div class="single-popup-wrap">
						<img class="img-fluid" src="<?php echo e(asset('images/banners/inside.jpg')); ?>" alt="">
					</div>
             </div>
        <!--  -->
      </div>
    </div>
  </div>
</div>
</section>
<section class="p-80 courses" id="board">
  <div class="container">
    <div class="row justify-content-center">
		<div class="col-12 col-sm-9">
			<div class="row justify-content-center text-center">
				<div class="col-12 col-sm-12 col-md-6">
					<div class="board-card">
						<h3>BUSINESS DEVELOPMENT DIVISION</h3>
							<div class="progress" data-percentage="<?php echo e($dashboarddata[0]->fied1); ?>">
								<span class="progress-left">
									<span class="progress-bar"></span>
								</span>
								<span class="progress-right">
									<span class="progress-bar"></span>
								</span>
								<div class="progress-value">
									<div>
										<span><?php echo e($dashboarddata[0]->fied1); ?>%</span>
									</div>
								</div>
							</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6">
					<div class="board-card">
						<h3>BUSINESS DEVELOPMENT DIVISION</h3>
						<div class="progress" data-percentage="<?php echo e($dashboarddata[0]->fied2); ?>">
								<span class="progress-left">
									<span class="progress-bar"></span>
								</span>
								<span class="progress-right">
									<span class="progress-bar"></span>
								</span>
								<div class="progress-value">
									<div>
										<span><?php echo e($dashboarddata[0]->fied2); ?>%</span>
									</div>
								</div>
							</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6">
					<div class="board-card">
						<h3>BUSINESS DEVELOPMENT DIVISION</h3>
						 <div class="progress" data-percentage="<?php echo e($dashboarddata[0]->fied3); ?>">
								<span class="progress-left">
									<span class="progress-bar"></span>
								</span>
								<span class="progress-right">
									<span class="progress-bar"></span>
								</span>
								<div class="progress-value">
									<div>
										<span><?php echo e($dashboarddata[0]->fied3); ?>%</span>
									</div>
								</div>
							</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6">
					<div class="board-card">
						<h3>BUSINESS DEVELOPMENT DIVISION</h3>
						<div class="progress" data-percentage="<?php echo e($dashboarddata[0]->fied5); ?>">
								<span class="progress-left">
									<span class="progress-bar"></span>
								</span>
								<span class="progress-right">
									<span class="progress-bar"></span>
								</span>
								<div class="progress-value">
									<div>
										<span><?php echo e($dashboarddata[0]->fied5); ?>%</span>
									</div>
								</div>
							</div>
					</div>
				</div>

				<div class="read-more board-btn">
	  		<a href="javascript(0)">See More</a>
	  	</div>

			</div>
		</div>
    </div>

  </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/larablog-master/resources/views/admin/pages/dashboard.blade.php ENDPATH**/ ?>