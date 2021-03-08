<?php if(session()->has('errors')): ?>
<div class="row">
    <div class="col-12">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                <i class="nc-icon nc-simple-remove" aria-hidden="true"></i>
            </button>
            <h6>
                <i class="nc-icon nc-alert-circle-i mr-1" aria-hidden="true"></i>
                <?php echo trans('messages.errors.list-title'); ?>

            </h6>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if(session()->has('error')): ?>
<div class="row">
    <div class="col-12">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                <i class="nc-icon nc-simple-remove" aria-hidden="true"></i>
            </button>
            <h6>
                <i class="nc-icon nc-alert-circle-i mr-1" aria-hidden="true"></i>
                <?php echo trans('messages.errors.single-title'); ?>

            </h6>
            <p>
                <?php echo session('error'); ?>

            </p>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if(session()->has('success')): ?>

<div class="row">
    <div class="col-12">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                <i class="nc-icon nc-simple-remove" aria-hidden="true"></i>
            </button>
            <h6>
                <i class="nc-icon nc-check-2 mr-1" aria-hidden="true"></i>
                <?php echo trans('messages.success.single-title'); ?>

            </h6>
            <p>
                <?php echo session('success'); ?>

            </p>
        </div>
    </div>
</div>

<?php endif; ?>
<?php /**PATH /var/www/html/sbs/resources/views/blog/partials/messages.blade.php ENDPATH**/ ?>