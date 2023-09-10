<?php
    Theme::asset()->container('footer')->usePath()->add('jquery.theia.sticky-js', 'js/plugins/jquery.theia.sticky.js');
?>

<?php echo Theme::partial('header'); ?>


<main class="main" id="main-section">
    <?php if(Theme::get('hasBreadcrumb', true)): ?>
        <?php echo Theme::partial('breadcrumb'); ?>

    <?php endif; ?>

    <div class="container mb-30">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="row">
                    <div class="col-lg-9">
                        <?php echo Theme::content(); ?>

                    </div>
                    <div class="col-xl-3 primary-sidebar sticky-sidebar mt-30">
                        <div class="widget-area">
                            <?php echo dynamic_sidebar('product_sidebar'); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php echo Theme::partial('footer'); ?>

<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/layouts/product-right-sidebar.blade.php ENDPATH**/ ?>