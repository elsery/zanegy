<?php
    SeoHelper::setTitle(__('404 - Not found'));
    Theme::fireEventGlobalAssets();
?>

<?php echo Theme::partial('header'); ?>


<main class="main page-404">
    <div class="page-content pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 col-md-12 m-auto text-center">
                    <p class="mb-20">
                        <img src="<?php echo e(Theme::asset()->url('imgs/page/page-404.png')); ?>" alt="<?php echo e(theme_option('site_title')); ?>" class="hover-up">
                    </p>
                    <h2 class="display-2 mb-30"><?php echo e(__('Page Not Found')); ?></h2>
                    <p class="font-lg text-grey-700 mb-30">
                        <?php echo BaseHelper::clean(__('The link you clicked may be broken or the page may have been removed.<br> visit the <a href=":link"> <span> Homepage</span></a> or <a href=":mail"><span>Contact us</span></a> about the problem.', ['link' => route('public.index'), 'mail' => 'mailto:' . theme_option('email')])); ?>

                    </p>
                    <?php if(is_plugin_active('ecommerce')): ?>
                        <div class="search-form">
                            <form action="<?php echo e(route('public.products')); ?>" method="GET">
                                <input name="q" placeholder="<?php echo e(__('Search...')); ?>" type="text">
                                <button type="submit"><i class="fi-rs-search"></i></button>
                            </form>
                        </div>
                    <?php endif; ?>
                    <a class="btn btn-default submit-auto-width font-xs hover-up mt-30" href="<?php echo e(route('public.index')); ?>"><i class="fi-rs-home mr-5"></i> <?php echo e(__('Back To Home Page')); ?></a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php echo Theme::partial('footer'); ?>



<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/views/404.blade.php ENDPATH**/ ?>