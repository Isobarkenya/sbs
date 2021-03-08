
<div class="sidebar" data-color="white" data-active-color="danger">

    <div class="logo text-center">
        <a href="/" class="simple-text logo-normal">
          Safaricom SBS
        </a>
    </div>

    <?php echo $__env->make('admin.partials.drawer-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>
<?php /**PATH /var/www/html/sbs/resources/views/admin/partials/sidebar.blade.php ENDPATH**/ ?>