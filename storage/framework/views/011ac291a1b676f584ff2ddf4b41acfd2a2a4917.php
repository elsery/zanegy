<?php
    $logo = theme_option('logo_in_the_checkout_page') ?: theme_option('logo');
?>

<?php if($logo): ?>
    <div class="checkout-logo">
        <div class="container">
            <a href="<?php echo e(route('public.index')); ?>" title="<?php echo e(theme_option('site_title')); ?>">
                <img src="<?php echo e(RvMedia::getImageUrl($logo)); ?>" class="img-fluid" width="150" alt="<?php echo e(theme_option('site_title')); ?>" />
            </a>
        </div>
    </div>
    <hr>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/plugins/ecommerce/resources/views/orders/partials/logo.blade.php ENDPATH**/ ?>