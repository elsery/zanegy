<div style="margin-bottom: 20px;">
    <label><?php echo e(__('Availability')); ?>: </label>
    <span class="number-items-available">
        <?php if($product->isOutOfStock()): ?>
            <span class="text-danger"><?php echo e(__('Out of stock')); ?></span>
        <?php elseif(!$product->with_storehouse_management || $product->quantity < 1): ?>
            <?php echo BaseHelper::clean($product->stock_status_html); ?>

        <?php elseif($product->quantity): ?>
            <?php if(EcommerceHelper::showNumberOfProductsInProductSingle()): ?>
                <span class="text-success">
                <?php if($product->quantity != 1): ?>
                    <?php echo e(__(':number products available', ['number' => $product->quantity])); ?>

                <?php else: ?>
                    <?php echo e(__(':number product available', ['number' => $product->quantity])); ?>

                <?php endif; ?>
                    </span>
            <?php else: ?>
                <span class="text-success"><?php echo e(__('In stock')); ?></span>
            <?php endif; ?>
        <?php endif; ?>
    </span>
</div>

<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/partials/product-availability.blade.php ENDPATH**/ ?>