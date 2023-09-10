<?php echo Theme::partial('header'); ?>


<main class="main" id="main-section">
    <?php if(Theme::get('hasBreadcrumb', true)): ?>
        <?php echo Theme::partial('breadcrumb'); ?>

    <?php endif; ?>

    <div class="container mb-30">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <?php echo Theme::content(); ?>

            </div>
        </div>
    </div>
</main>

<?php echo Theme::partial('footer'); ?>

<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/layouts/product-full-width.blade.php ENDPATH**/ ?>