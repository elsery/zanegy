<?php if($product): ?>
    <div class="product-cart-wrap mb-30">
        <div class="product-img-action-wrap">
            <div class="product-img product-img-zoom">
                <a href="<?php echo e($product->url); ?>">
                    <img class="default-img" src="<?php echo e(RvMedia::getImageUrl($product->image, 'product-thumb', false, RvMedia::getDefaultImage())); ?>" alt="<?php echo e($product->name); ?>">
                    <img class="hover-img" src="<?php echo e(RvMedia::getImageUrl(Arr::get($product->images, 1, $product->image), 'product-thumb', false, RvMedia::getDefaultImage())); ?>" alt="<?php echo e($product->name); ?>">
                </a>
            </div>
            <div class="product-action-1">
                <a aria-label="<?php echo e(__('Quick View')); ?>" href="#" class="action-btn hover-up js-quick-view-button" data-url="<?php echo e(route('public.ajax.quick-view', $product->id)); ?>">
                    <i class="fi-rs-eye"></i>
                </a>
                <?php if(EcommerceHelper::isWishlistEnabled()): ?>
                    <a aria-label="<?php echo e(__('Add To Wishlist')); ?>" href="#" class="action-btn hover-up js-add-to-wishlist-button" data-url="<?php echo e(route('public.wishlist.add', $product->id)); ?>">
                        <i class="fi-rs-heart"></i>
                    </a>
                <?php endif; ?>
                <?php if(EcommerceHelper::isCompareEnabled()): ?>
                    <a aria-label="<?php echo e(__('Add To Compare')); ?>" href="#" class="action-btn hover-up js-add-to-compare-button" data-url="<?php echo e(route('public.compare.add', $product->id)); ?>">
                        <i class="fi-rs-shuffle"></i>
                    </a>
                <?php endif; ?>
            </div>
            <div class="product-badges product-badges-position product-badges-mrg">
                <?php if($product->isOutOfStock()): ?>
                    <span class="bg-dark" style="font-size: 11px;"><?php echo e(__('Out Of Stock')); ?></span>
                <?php else: ?>
                    <?php if($product->productLabels->count()): ?>
                        <?php $__currentLoopData = $product->productLabels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span <?php if($label->color): ?> style="background-color: <?php echo e($label->color); ?>" <?php endif; ?>><?php echo e($label->name); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <?php if($product->front_sale_price !== $product->price): ?>
                            <span class="hot"><?php echo e(get_sale_percentage($product->price, $product->front_sale_price)); ?></span>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="product-content-wrap">
            <?php if($category = $product->categories->sortByDesc('id')->first()): ?>
                <div class="product-category">
                    <a href="<?php echo e($category->url); ?>"><?php echo BaseHelper::clean($category->name); ?></a>
                </div>
            <?php endif; ?>
            <h2><a href="<?php echo e($product->url); ?>"><?php echo BaseHelper::clean($product->name); ?></a></h2>

            <?php if(EcommerceHelper::isReviewEnabled() && $product->reviews_count): ?>
                <div class="product-rate-cover">
                    <div class="product-rate d-inline-block">
                        <div class="product-rating" style="width: <?php echo e($product->reviews_avg * 20); ?>%"></div>
                    </div>
                    <span class="font-small ml-5 text-muted">(<?php echo e($product->reviews_count); ?>)</span>
                </div>
            <?php endif; ?>
            <?php if(is_plugin_active('marketplace') && $product->store->id): ?>
                <div>
                    <span class="font-small text-muted"><?php echo e(__('Sold By')); ?> <a href="<?php echo e($product->store->url); ?>"><?php echo BaseHelper::clean($product->store->name); ?></a></span>
                </div>
            <?php endif; ?>

            <div class="product-card-bottom">
                <?php echo apply_filters('ecommerce_before_product_price_in_listing', null, $product); ?>


                <div class="product-price">
                    <span><?php echo e(format_price($product->front_sale_price_with_taxes)); ?></span>
                    <?php if($product->front_sale_price !== $product->price): ?>
                        <span class="old-price"><?php echo e(format_price($product->price_with_taxes)); ?></span>
                    <?php endif; ?>
                </div>

                <?php echo apply_filters('ecommerce_after_product_price_in_listing', null, $product); ?>


                <?php if(EcommerceHelper::isCartEnabled()): ?>
                    <div class="add-cart">
                        <a aria-label="<?php echo e(__('Add To Cart')); ?>"
                            class="action-btn add-to-cart-button add"
                            data-id="<?php echo e($product->id); ?>"
                            data-url="<?php echo e(route('public.cart.add-to-cart')); ?>"
                            href="#">
                            <i class="fi-rs-shopping-cart mr-5"></i> <span class="d-inline-block"><?php echo e(__('Add')); ?></span>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/views/ecommerce/includes/product-item.blade.php ENDPATH**/ ?>