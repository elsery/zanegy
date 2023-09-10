<div class="bg-light p-2">
    <p class="font-weight-bold mb-0"><?php echo e(__('Product(s)')); ?>:</p>
</div>
<div class="checkout-products-marketplace" id="shipping-method-wrapper">
    <?php $__currentLoopData = $groupedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grouped): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $cartItems = $grouped['products']->pluck('cartItem');
            $store = $grouped['store'];
            if (!$store->exists) {
                $store->id = 0;
                $store->name = theme_option('site_title');
                $store->logo = theme_option('logo');
            }
            $storeId = $store->id;
            $sessionData = Arr::get($sessionCheckoutData, 'marketplace.' . $storeId, []);
            $shipping = Arr::get($sessionData, 'shipping', []);
            $defaultShippingOption = Arr::get($sessionData, 'shipping_option');
            $defaultShippingMethod = Arr::get($sessionData, 'shipping_method');
            $promotionDiscountAmount = Arr::get($sessionData, 'promotion_discount_amount', 0);
            $couponDiscountAmount = Arr::get($sessionData, 'coupon_discount_amount', 0);
            $shippingAmount = Arr::get($sessionData, 'shipping_amount', 0);
            $isFreeShipping = Arr::get($sessionData, 'is_free_shipping', 0);
            $rawTotal = Cart::rawTotalByItems($cartItems);
            $shippingCurrent = Arr::get($shipping, $defaultShippingMethod . '.' . $defaultShippingOption, []);
            $isAvailableShipping = Arr::get($sessionData, 'is_available_shipping', true);

            $orderAmount = max($rawTotal - $promotionDiscountAmount - $couponDiscountAmount, 0);
            $orderAmount += (float)$shippingAmount;
        ?>
        <div class="mt-3 bg-light mb-3">
            <div class="p-2" style="background: antiquewhite;">
                <img src="<?php echo e(RvMedia::getImageUrl($store->logo, 'small', false, RvMedia::getDefaultImage())); ?>"
                    alt="<?php echo e($store->name); ?>"
                    class="img-fluid rounded"
                    width="30">
                <span class="font-weight-bold"><?php echo BaseHelper::clean($store->name); ?></span>
                <?php if(EcommerceHelper::isReviewEnabled()): ?>
                    <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: <?php echo e(4 * 20); ?>%"></div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="p-3">
                <?php $__currentLoopData = $grouped['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make('plugins/ecommerce::orders.checkout.product', ['product' => $product, 'cartItem' => $product->cartItem], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <?php if($isAvailableShipping): ?>
                <div class="shipping-method-wrapper p-3">
                    <?php if(!empty($shipping)): ?>
                        <div class="payment-checkout-form">
                            <div class="mx-0">
                                <h6><?php echo e(__('Shipping method')); ?>:</h6>
                            </div>

                            <input type="hidden" name="shipping_option[<?php echo e($storeId); ?>]" value="<?php echo e(old("shipping_option.$storeId", $defaultShippingOption)); ?>">
                            <div id="shipping-method-<?php echo e($storeId); ?>">
                                <ul class="list-group list_payment_method">
                                    <?php $__currentLoopData = $shipping; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shippingKey => $shippingItems): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php $__currentLoopData = $shippingItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shippingOption => $shippingItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo $__env->make('plugins/ecommerce::orders.partials.shipping-option', [
                                                'shippingItem' => $shippingItem,
                                                'attributes' => [
                                                    'id' => 'shipping-method-' . $storeId . '-' . $shippingKey . '-' . $shippingOption,
                                                    'name' => 'shipping_method[' . $storeId . ']',
                                                    'class' => 'magic-radio shipping_method_input',
                                                    'checked' => old('shipping_method.' . $storeId, $shippingKey) == $defaultShippingMethod && old('shipping_option.' . $storeId, $shippingOption) == $defaultShippingOption,
                                                    'disabled' => Arr::get($shippingItem, 'disabled'),
                                                    'data-id'=> $storeId,
                                                    'data-option' => $shippingOption,
                                                ],
                                            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    <?php else: ?>
                        <p><?php echo e(__('No shipping methods available!')); ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <hr>
            <?php if(count($groupedProducts) > 1): ?>
                <div class="p-3">
                    <div class="row">
                        <div class="col-6">
                            <p><?php echo e(__('Subtotal')); ?>:</p>
                        </div>
                        <div class="col-6 text-end">
                            <p class="price-text sub-total-text text-end"> <?php echo e(format_price(Cart::rawSubTotalByItems($cartItems))); ?> </p>
                        </div>
                    </div>
                    <?php if(EcommerceHelper::isTaxEnabled()): ?>
                        <div class="row">
                            <div class="col-6">
                                <p><?php echo e(__('Tax')); ?>:</p>
                            </div>
                            <div class="col-6 text-end">
                                <p class="price-text tax-price-text"><?php echo e(format_price(Cart::rawTaxByItems($cartItems))); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if($couponDiscountAmount): ?>
                        <div class="row">
                            <div class="col-6">
                                <p><?php echo e(__('Discount amount')); ?>:</p>
                            </div>
                            <div class="col-6 text-end">
                                <p class="price-text coupon-price-text"><?php echo e(format_price($couponDiscountAmount)); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if($isAvailableShipping): ?>
                        <div class="row">
                            <div class="col-6">
                                <p><?php echo e(__('Shipping fee')); ?>:</p>
                            </div>
                            <div class="col-6 text-end">
                                <p class="price-text">
                                    <?php if(Arr::get($shippingCurrent, 'price') && $isFreeShipping): ?>
                                        <span class="font-italic" style="text-decoration-line: line-through;"><?php echo e(format_price(Arr::get($shippingCurrent, 'price'))); ?></span>
                                        <span class="font-weight-bold"><?php echo e(__('Free shipping')); ?></span>
                                    <?php else: ?>
                                        <span class="font-weight-bold"><?php echo e(format_price(Arr::get($shippingCurrent, 'price'))); ?></span>
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-6">
                            <p><?php echo e(__('Total')); ?>:</p>
                        </div>
                        <div class="col-6 float-end">
                            <p class="total-text raw-total-text mb-0" data-price="<?php echo e($rawTotal); ?>">
                                <?php echo e(format_price($orderAmount)); ?>

                            </p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\xampp\htdocs\work.com\platform/plugins/marketplace/resources/views/orders/checkout/products.blade.php ENDPATH**/ ?>