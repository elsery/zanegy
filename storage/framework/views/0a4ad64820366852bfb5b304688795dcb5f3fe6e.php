<?php if(get_payment_setting('status', MOLLIE_PAYMENT_METHOD_NAME) == 1): ?>
    <li class="list-group-item">
        <input class="magic-radio js_payment_method" type="radio" name="payment_method" id="payment_<?php echo e(MOLLIE_PAYMENT_METHOD_NAME); ?>"
            value="<?php echo e(MOLLIE_PAYMENT_METHOD_NAME); ?>" <?php if($selecting == MOLLIE_PAYMENT_METHOD_NAME): ?> checked <?php endif; ?>>
        <label for="payment_<?php echo e(MOLLIE_PAYMENT_METHOD_NAME); ?>"><?php echo e(get_payment_setting('name', MOLLIE_PAYMENT_METHOD_NAME)); ?></label>
        <div class="payment_<?php echo e(MOLLIE_PAYMENT_METHOD_NAME); ?>_wrap payment_collapse_wrap collapse <?php if($selecting == MOLLIE_PAYMENT_METHOD_NAME): ?> show <?php endif; ?>">
            <p><?php echo get_payment_setting('description', MOLLIE_PAYMENT_METHOD_NAME, __('Payment with Mollie')); ?></p>
        </div>
    </li>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/plugins/mollie/resources/views/methods.blade.php ENDPATH**/ ?>