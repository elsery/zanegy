<?php if(is_plugin_active('ecommerce')): ?>
    <?php
        $products = app(Botble\Ecommerce\Repositories\Interfaces\ProductInterface::class)
            ->advancedGet([
                'take'      => (int) $config['number_display'] ?: 3,
                'condition' => [
                    'ec_products.status' => \Botble\Base\Enums\BaseStatusEnum::PUBLISHED,
                    'ec_products.is_variation' => 0,
                ],
                'order_by' => [
                    'created_at' => 'DESC',
                ],
            ] + EcommerceHelper::withReviewsParams());
    ?>
    <div class="sidebar-widget product-sidebar mb-30 p-30 bg-grey border-radius-10">
        <h5 class="section-title style-1 mb-30"><?php echo e($config['name']); ?></h5>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="single-post clearfix">
                <div class="image">
                    <img src="<?php echo e(RvMedia::getImageUrl($product->image, 'product-thumb', false, RvMedia::getDefaultImage())); ?>" alt="<?php echo e($product->name); ?>">
                </div>
                <div class="content pt-10">
                    <h5><a href="<?php echo e($product->url); ?>"><?php echo BaseHelper::clean($product->name); ?></a></h5>
                    <p class="price mb-0 mt-5"><?php echo e(format_price($product->front_sale_price_with_taxes)); ?></p>
                    <?php if(EcommerceHelper::isReviewEnabled() && $product->reviews_count): ?>
                        <div class="product-rate">
                            <div class="product-rating" style="width: <?php echo e($product->reviews_avg * 20); ?>%"></div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/////widgets/new-products/templates/frontend.blade.php ENDPATH**/ ?>