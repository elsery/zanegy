<?php
    $sorts = EcommerceHelper::getSortParams();
    $shows = EcommerceHelper::getShowParams();
    $sortBy = json_encode(request()->input('sort-by', 'default_sorting'));
    $showing = (int)request()->input('num', (int)theme_option('number_of_products_per_page', 12));
?>

<div class="sort-by-product-area">
    <div class="sort-by-cover mr-10 products_sortby">
        <div class="sort-by-product-wrap">
            <div class="sort-by">
                <span><i class="fi-rs-apps"></i><?php echo e(__('Show:')); ?></span>
            </div>
            <div class="sort-by-dropdown-wrap">
                <span> <?php echo Arr::get($shows, $showing, (int)theme_option('number_of_products_per_page', 12)); ?> <i class="fi-rs-angle-small-down"></i></span>
            </div>
        </div>
        <div class="sort-by-dropdown products_ajaxsortby" data-name="num">
            <ul>
                <?php $__currentLoopData = $shows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a data-label="<?php echo e($label); ?>"
                            class="<?php if($showing == $key): ?> active <?php endif; ?>"
                            href="<?php echo e(request()->fullUrlWithQuery(['num' => $key])); ?>"><?php echo e($label); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
    <div class="sort-by-cover products_sortby">
        <div class="sort-by-product-wrap">
            <div class="sort-by">
                <span><i class="fi-rs-apps-sort"></i><?php echo e(__('Sort by:')); ?></span>
            </div>
            <div class="sort-by-dropdown-wrap">
                <span><span><?php echo Arr::get($sorts, $sortBy); ?></span> <i class="fi-rs-angle-small-down"></i></span>
            </div>
        </div>
        <div class="sort-by-dropdown products_ajaxsortby" data-name="sort-by">
            <ul>
                <?php $__currentLoopData = $sorts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a data-label="<?php echo e($label); ?>"
                        class="<?php if($sortBy == $key): ?> active <?php endif; ?>"
                        href="<?php echo e(request()->fullUrlWithQuery(['sort-by' => $key])); ?>"><?php echo e($label); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/views/ecommerce/includes/sort.blade.php ENDPATH**/ ?>