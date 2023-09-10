<?php $__env->startSection('page'); ?>
    <div style="display: none;">
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="select-chevron" class="icon-symbol--loaded"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 16l-4-4h8l-4 4zm0-12L6 8h8l-4-4z"></path></svg></symbol>
        </svg>
    </div>

    <div class="page-wrapper">

        <?php echo $__env->make('core/base::layouts.partials.top-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="clearfix"></div>
        <div class="page-container">
            <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
                    <div class="sidebar">
                        <div class="sidebar-content">
                            <ul class="page-sidebar-menu page-header-fixed <?php echo e(session()->get('sidebar-menu-toggle') ? 'page-sidebar-menu-closed' : ''); ?>" data-keep-expanded="false" data-auto-scroll="false" data-slide-speed="200">
                                <?php echo $__env->make('core/base::layouts.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-content-wrapper">
                <div class="page-content <?php if(Route::currentRouteName() == 'media.index'): ?> rv-media-integrate-wrapper <?php endif; ?>" style="min-height: 100vh">
                    <?php echo Breadcrumbs::render('main', page_title()->getTitle(false)); ?>

                    <div class="clearfix"></div>
                    <div id="main">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php echo $__env->make('core/base::layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    <?php echo $__env->make('core/media::partials.media', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('footer'); ?>
    <?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('core/base::layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\work.com\platform/core/base/resources/views/layouts/master.blade.php ENDPATH**/ ?>