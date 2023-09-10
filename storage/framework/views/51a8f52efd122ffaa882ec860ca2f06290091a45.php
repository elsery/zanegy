<?php
    $layout = theme_option('product_list_layout');

    $requestLayout = (string)request()->input('layout');
    if ($requestLayout && in_array($requestLayout, array_keys(get_product_single_layouts()))) {
        $layout = $requestLayout;
    }

    $layout = ($layout && in_array($layout, array_keys(get_product_single_layouts()))) ? $layout : 'product-full-width';
?>

<div class="list-content-loading">
    <div class="half-circle-spinner">
        <div class="circle circle-1"></div>
        <div class="circle circle-2"></div>
    </div>
</div>

<div class="shop-product-filter">
    <div class="total-product">
        <p><?php echo BaseHelper::clean(__('We found :total items for you!', ['total' => '<strong class="text-brand">' . $products->total() . '</strong>'])); ?></p>
    </div>
    <?php echo $__env->make(Theme::getThemeNamespace() . '::views/ecommerce/includes/sort', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<input type="hidden" name="page" data-value="<?php echo e($products->currentPage()); ?>">
<input type="hidden" name="sort-by" value="<?php echo e(json_encode(request()->input('sort-by'))); ?>">
<input type="hidden" name="num" value="<?php echo e((int)request()->input('num')); ?>">
<input type="hidden" name="q" value="<?php echo e(BaseHelper::stringify(request()->input('q'))); ?>">

<div class="row product-grid">
    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-12 col-sm-6">
            <?php echo $__env->make(Theme::getThemeNamespace() . '::views.ecommerce.includes.product-item', compact('product'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="mt__60 mb__60 text-center">
            <p><?php echo e(__('No products found!')); ?></p>
        </div>
    <?php endif; ?>
</div>

<?php if($products->total() > 0): ?>
    <br>
    <?php echo $products->withQueryString()->links(Theme::getThemeNamespace() . '::partials.custom-pagination'); ?>

<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/views/ecommerce/includes/product-items.blade.php ENDPATH**/ ?>