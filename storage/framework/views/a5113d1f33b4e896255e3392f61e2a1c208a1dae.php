<?php
    $layout = theme_option('product_list_layout');

    $requestLayout = request()->input('layout');
    if ($requestLayout && in_array($requestLayout, array_keys(get_product_single_layouts()))) {
        $layout = $requestLayout;
    }

    $layout = ($layout && in_array($layout, array_keys(get_product_single_layouts()))) ? $layout : 'product-full-width';
    Theme::layout($layout);

    Theme::asset()->usePath()->add('jquery-ui-css', 'css/plugins/jquery-ui.css');
    Theme::asset()->container('footer')->usePath()->add('jquery-ui-js', 'js/plugins/jquery-ui.js');
    Theme::asset()->container('footer')->usePath()->add('jquery-ui-touch-punch-js', 'js/plugins/jquery.ui.touch-punch.min.js');

    $products->loadMissing(['categories', 'categories.slugable']);
?>

<div class="col-lg-12 m-auto my-5">
    <a class="shop-filter-toggle" href="#">
        <span class="fi-rs-filter mr-5"></span>
        <span class="title"><?php echo e(__('Filters')); ?></span>
        <i class="fi-rs-angle-small-up angle-up"></i>
        <i class="fi-rs-angle-small-down angle-down"></i>
    </a>
    <form action="<?php echo e(URL::current()); ?>" method="GET" >
        <?php if($layout != 'product-full-width'): ?>
            <input type="hidden" name="layout" value="<?php echo e($layout); ?>">
        <?php endif; ?>
        <?php echo $__env->make(Theme::getThemeNamespace() . '::views/ecommerce/includes/filters', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>
</div>

<div class="products-listing position-relative">
    <?php echo $__env->make(Theme::getThemeNamespace() . '::views.ecommerce.includes.product-items', compact('products'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/views/ecommerce/products.blade.php ENDPATH**/ ?>