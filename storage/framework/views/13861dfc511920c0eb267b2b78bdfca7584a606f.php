<div class="row cart-item">
    <div class="col-3">
        <div class="checkout-product-img-wrapper">
            <img class="item-thumb img-thumbnail img-rounded" src="<?php echo e(RvMedia::getImageUrl(Arr::get($cartItem->options, 'image'), default: RvMedia::getDefaultImage())); ?>" alt="<?php echo e($product->original_product->name); ?>">
            <span class="checkout-quantity"><?php echo e($cartItem->qty); ?></span>
        </div>
    </div>
    <div class="col">
        <p class="mb-0"><?php echo e($product->original_product->name); ?> <?php if($product->isOutOfStock()): ?> <span class="stock-status-label">(<?php echo $product->stock_status_html; ?>)</span> <?php endif; ?></p>
        <p class="mb-0">
            <small><?php echo e($product->variation_attributes); ?></small>
        </p>

        <?php echo $__env->make('plugins/ecommerce::themes.includes.cart-item-options-extras', ['options' => $cartItem->options], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php if(! empty($cartItem->options['options'])): ?>
            <?php echo render_product_options_html($cartItem->options['options'], $product->original_price); ?>

        <?php endif; ?>
    </div>
    <div class="col-auto text-end">
        <p><?php echo e(format_price($cartItem->price)); ?></p>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\work.com\platform/plugins/ecommerce/resources/views/orders/checkout/product.blade.php ENDPATH**/ ?>