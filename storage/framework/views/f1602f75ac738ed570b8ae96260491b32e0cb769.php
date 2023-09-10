    <footer class="main">
        <?php echo dynamic_sidebar('pre_footer_sidebar'); ?>


        <section class="section-padding footer-mid">
            <div class="container pt-15 pb-20">
                <div class="row">
                    <?php echo dynamic_sidebar('footer_sidebar'); ?>

                </div>
            </div>
        </section>
        <div class="container pb-30  wow animate__animated animate__fadeInUp"  data-wow-delay="0">
            <div class="row align-items-center">
                <div class="col-12 mb-30">
                    <div class="footer-bottom"></div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <p class="font-sm mb-0"><?php echo BaseHelper::clean(theme_option('copyright')); ?></p>
                </div>
                <div class="col-xl-4 col-lg-6 text-center d-none d-xl-block">
                    <?php if(theme_option('hotline')): ?>
                        <div class="hotline d-lg-inline-flex">
                            <img src="<?php echo e(Theme::asset()->url('imgs/theme/icons/phone-call.svg')); ?>" alt="hotline" />
                            <p><?php echo e(theme_option('hotline')); ?><span><?php echo e(__('24/7 Support Center')); ?></span></p>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 text-end d-none d-md-block">
                    <?php if(theme_option('social_links')): ?>
                        <div class="mobile-social-icon">
                            <h6><?php echo e(__('Follow Us')); ?></h6>
                            <?php $__currentLoopData = json_decode(theme_option('social_links'), true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socialLink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(count($socialLink) == 3): ?>
                                    <a href="<?php echo e($socialLink[2]['value']); ?>"
                                       title="<?php echo e($socialLink[0]['value']); ?>">
                                        <img src="<?php echo e(RvMedia::getImageUrl($socialLink[1]['value'])); ?>" alt="<?php echo e($socialLink[0]['value']); ?>" />
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>
                    <p class="font-sm"><?php echo e(__('Up to 15% discount on your first subscribe')); ?></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Quick view -->
    <div class="modal fade custom-modal" id="quick-view-modal" tabindex="-1" aria-labelledby="quick-view-modal-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="half-circle-spinner loading-spinner">
                        <div class="circle circle-1"></div>
                        <div class="circle circle-2"></div>
                    </div>
                    <div class="quick-view-content"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.trans = {
            "Views": "<?php echo e(__('Views')); ?>",
            "Read more": "<?php echo e(__('Read more')); ?>",
            "days": "<?php echo e(__('days')); ?>",
            "hours": "<?php echo e(__('hours')); ?>",
            "mins": "<?php echo e(__('mins')); ?>",
            "sec": "<?php echo e(__('sec')); ?>",
            "No reviews!": "<?php echo e(__('No reviews!')); ?>",
            "Sold By": "<?php echo e(__('Sold By')); ?>",
            "Quick View": "<?php echo e(__('Quick View')); ?>",
            "Add To Wishlist": "<?php echo e(__('Add To Wishlist')); ?>",
            "Add To Compare": "<?php echo e(__('Add To Compare')); ?>",
            "Out Of Stock": "<?php echo e(__('Out Of Stock')); ?>",
            "Add To Cart": "<?php echo e(__('Add To Cart')); ?>",
            "Add": "<?php echo e(__('Add')); ?>",
        };

        window.siteUrl = "<?php echo e(route('public.index')); ?>";

        <?php if(is_plugin_active('ecommerce')): ?>
            window.currencies = <?php echo json_encode(get_currencies_json()); ?>;
        <?php endif; ?>
    </script>

    <?php echo Theme::footer(); ?>


    <?php if(session()->has('success_msg') || session()->has('error_msg') || (isset($errors) && $errors->count() > 0) || isset($error_msg)): ?>
        <script type="text/javascript">
            window.onload = function () {
                <?php if(session()->has('success_msg')): ?>
                    window.showAlert('alert-success', '<?php echo e(session('success_msg')); ?>');
                <?php endif; ?>

                <?php if(session()->has('error_msg')): ?>
                    window.showAlert('alert-danger', '<?php echo e(session('error_msg')); ?>');
                <?php endif; ?>

                <?php if(isset($error_msg)): ?>
                    window.showAlert('alert-danger', '<?php echo e($error_msg); ?>');
                <?php endif; ?>

                <?php if(isset($errors)): ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        window.showAlert('alert-danger', '<?php echo BaseHelper::clean($error); ?>');
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            };
        </script>
    <?php endif; ?>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/partials/footer.blade.php ENDPATH**/ ?>