<div class="pt-3 mb-4">
    <div class="align-items-center">
        <h6 class="d-inline-block"><?php echo e(__('Order number')); ?>: <?php echo e($order->code); ?></h6>
    </div>

    <div class="checkout-success-products">
        <div class="row show-cart-row d-md-none p-2">
            <div class="col-9">
                <a class="show-cart-link"
                   href="javascript:void(0);"
                   data-bs-toggle="collapse"
                   data-bs-target="<?php echo e('#cart-item-' . $order->id); ?>">
                    <?php echo e(__('Order information :order_id', ['order_id' => $order->code])); ?> <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
            </div>
            <div class="col-3">
                <p class="text-end mobile-total"> <?php echo e(format_price($order->amount)); ?> </p>
            </div>
        </div>
        <div id="<?php echo e('cart-item-' . $order->id); ?>" class="collapse collapse-products">
            <?php $__currentLoopData = $order->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row cart-item">
                    <div class="col-lg-3 col-md-3">
                        <div class="checkout-product-img-wrapper">
                            <img class="item-thumb img-thumbnail img-rounded"
                                src="<?php echo e(RvMedia::getImageUrl($orderProduct->product_image, 'thumb', false, RvMedia::getDefaultImage())); ?>"
                                alt="<?php echo e($orderProduct->product_name); ?>">
                            <span class="checkout-quantity"><?php echo e($orderProduct->qty); ?></span>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <p class="mb-0"><?php echo e($orderProduct->product_name); ?></p>
                        <p class="mb-0">
                            <small><?php echo e(Arr::get($orderProduct->options, 'attributes', '')); ?></small>
                        </p>
                        <?php if(! empty($orderProduct->product_options) && is_array($orderProduct->product_options)): ?>
                            <?php echo render_product_options_html($orderProduct->product_options, $orderProduct->price); ?>

                        <?php endif; ?>

                        <?php echo $__env->make('plugins/ecommerce::themes.includes.cart-item-options-extras', ['options' => $orderProduct->options], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="col-lg-4 col-md-4 col-4 float-end text-end">
                        <p><?php echo e(format_price($orderProduct->price)); ?></p>
                    </div>
                </div> <!--  /item -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if(! empty($isShowTotalInfo)): ?>
                <?php echo $__env->make('plugins/ecommerce::orders.thank-you.total-info', compact('order'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\work.com\platform/plugins/ecommerce/resources/views/orders/thank-you/order-info.blade.php ENDPATH**/ ?>