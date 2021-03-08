<?php $__env->startSection('template_title'); ?>
    <?php echo trans('admin.file_manager.index.title'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('template_description'); ?>
    <?php echo trans('admin.file_manager.index.title'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_title'); ?>
    <?php echo trans('admin.file_manager.index.header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('head'); ?>
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('vendor/laravel-filemanager/img/folder.png')); ?>">
    <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bs3-modals.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <h5 class="card-title">
                    <?php echo trans('laravel-filemanager::lfm.title-panel'); ?>

                </h5>
            </div>
            <hr>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-2 hidden-xs">
                        <div id="tree"></div>
                    </div>
                    <div class="col-sm-10 col-xs-12" id="main">
                        <a class="navbar-brand clickable hide" id="to-previous">
                            <i class="fa fa-arrow-left"></i>
                            <span class="hidden-xs">
                                <?php echo e(trans('laravel-filemanager::lfm.nav-back')); ?>

                            </span>
                        </a>
                        <a class="navbar-brand visible-xs" href="#">
                            <?php echo e(trans('laravel-filemanager::lfm.title-panel')); ?>

                        </a>

                        <div class="collapsse navbar-collapse" id="nav-buttons">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a class="clickable" id="thumbnail-display">
                                      <i class="fa fa-th-large"></i>
                                      <span><?php echo e(trans('laravel-filemanager::lfm.nav-thumbnails')); ?></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="clickable" id="list-display">
                                      <i class="fa fa-list"></i>
                                      <span><?php echo e(trans('laravel-filemanager::lfm.nav-list')); ?></span>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                      <?php echo e(trans('laravel-filemanager::lfm.nav-sort')); ?> <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#" id="list-sort-alphabetic">
                                                <i class="fa fa-sort-alpha-asc"></i> <?php echo e(trans('laravel-filemanager::lfm.nav-sort-alphabetic')); ?>

                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" id="list-sort-time">
                                                <i class="fa fa-sort-amount-asc"></i> <?php echo e(trans('laravel-filemanager::lfm.nav-sort-time')); ?>

                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="visible-xssss" id="current_dir" style="padding: 5px 15px;background-color: #f8f8f8;color: #5e5e5e;"></div>
                        <div id="alerts"></div>
                        <div id="content"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul id="fab">
        <li>
            <a href="#"></a>
            <ul class="hide">
                <li>
                    <a href="#" id="add-folder" data-mfb-label="<?php echo e(trans('laravel-filemanager::lfm.nav-new')); ?>">
                        <i class="fa fa-folder"></i>
                    </a>
                </li>
                <li>
                    <a href="#" id="upload" data-mfb-label="<?php echo e(trans('laravel-filemanager::lfm.nav-upload')); ?>">
                        <i class="fa fa-upload"></i>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>

<?php echo $__env->make('admin.modals.upload-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startPrepend('scripts'); ?>
<?php $__env->stopPrepend(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="<?php echo e(asset('vendor/laravel-filemanager/js/cropper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/laravel-filemanager/js/jquery.form.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/laravel-filemanager/js/dropzone.min.js')); ?>"></script>
    <script>
        var route_prefix = "<?php echo e(url('/')); ?>";
        var lfm_route = "<?php echo e(url(config('lfm.url_prefix', config('lfm.prefix')))); ?>";
        var lang = <?php echo json_encode(trans('laravel-filemanager::lfm')); ?>;
    </script>

    <script src="<?php echo e(asset('vendor/laravel-filemanager/js/script.js')); ?>"></script>
    <script>
        $.fn.fab = function () {
            var menu = this;
            menu.addClass('mfb-component--br mfb-zoomin').attr('data-mfb-toggle', 'hover');
            var wrapper = menu.children('li');
            wrapper.addClass('mfb-component__wrap');
            var parent_button = wrapper.children('a');
            parent_button.addClass('mfb-component__button--main')
                .append($('<i>').addClass('mfb-component__main-icon--resting fa fa-plus'))
                .append($('<i>').addClass('mfb-component__main-icon--active fa fa-times'));
            var children_list = wrapper.children('ul');
            children_list.find('a').addClass('mfb-component__button--child');
            children_list.find('i').addClass('mfb-component__child-icon');
            children_list.addClass('mfb-component__list').removeClass('hide');
        };
        $('#fab').fab({
            buttons: [
                {
                    icon: 'fa fa-folder',
                    label: "<?php echo e(trans('laravel-filemanager::lfm.nav-new')); ?>",
                    attrs: {id: 'add-folder'}
                },
                {
                    icon: 'fa fa-upload',
                    label: "<?php echo e(trans('laravel-filemanager::lfm.nav-upload')); ?>",
                    attrs: {id: 'upload'}
                }
            ]
        });

        Dropzone.options.uploadForm = {
            paramName: "upload[]", // The name that will be used to transfer the file
            uploadMultiple: false,
            parallelUploads: 5,
            clickable: '#upload-button',
            dictDefaultMessage: 'Or drop files here to upload',
            init: function() {
                var _this = this; // For the closure
                this.on('success', function(file, response) {
                    if (response == 'OK') {
                        refreshFoldersAndItems('OK');
                    } else {
                        this.defaultOptions.error(file, response.join('\n'));
                    }
                });
            },
            acceptedFiles: "<?php echo e(lcfirst(str_singular(request('type') ?: '')) == 'image' ? implode(',', config('lfm.valid_image_mimetypes')) : implode(',', config('lfm.valid_file_mimetypes'))); ?>",
            maxFilesize: (<?php echo e(lcfirst(str_singular(request('type') ?: '')) == 'image' ? config('lfm.max_image_size') : config('lfm.max_file_size')); ?> / 1000)
        }
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sbs/resources/views/admin/pages/uploads.blade.php ENDPATH**/ ?>