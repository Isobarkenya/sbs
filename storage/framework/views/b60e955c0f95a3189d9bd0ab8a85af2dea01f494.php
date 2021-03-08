<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <?php if(config('blog.services.googleAnalyticsID')): ?>
            <?php echo $__env->make('blog.partials.analytics', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title>Safaricom SBS</title>
        <?php if(trim($__env->yieldContent('template_description'))): ?>
            <meta name="description" content="<?php echo $__env->yieldContent('template_description'); ?>">
        <?php endif; ?>
        <meta name="author" content="<?php echo e(config('blog.author')); ?>">
        <link rel="shortcut icon" href="/favicon.ico">

        
        <?php echo $__env->make('feed::links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!--StyleSheet-->
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

        

        <link href="<?php echo e('css/style.css'); ?>" rel="stylesheet">
        <script src="<?php echo e('js/google.api.js'); ?>" defer></script>


        <?php if($theme): ?>
            <link rel="stylesheet" type="text/css" href="<?php echo e($theme->link); ?>">
        <?php endif; ?>

        
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>;
        </script>

        <?php echo $__env->yieldPushContent('head'); ?>
    </head>
    <body>

            <?php echo $__env->make('blog.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                <?php echo $__env->yieldContent('content'); ?>

           <?php echo $__env->make('blog.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        
        <script src="<?php echo e('js/jquery.js'); ?>" defer></script>
      
        <script src="<?php echo e('js/main.js'); ?>" defer></script>

        <?php echo $__env->yieldPushContent('scripts'); ?>
    </body>
</html>
<?php /**PATH /var/www/html/sbs/resources/views/layouts/app.blade.php ENDPATH**/ ?>