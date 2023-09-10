<li class="list-group-item">
    <input class="magic-radio js_payment_method" type="radio" name="payment_method" id="payment_cod"
           <?php if(PaymentMethods::getSelectingMethod() == \Botble\Payment\Enums\PaymentMethodEnum::COD): ?> checked <?php endif; ?>
           value="cod">
    <label for="payment_cod" class="text-start"><?php echo e(setting('payment_cod_name', trans('plugins/payment::payment.payment_via_cod'))); ?></label>
    <div class="payment_cod_wrap payment_collapse_wrap collapse <?php if(PaymentMethods::getSelectingMethod() == \Botble\Payment\Enums\PaymentMethodEnum::COD): ?> show <?php endif; ?>" style="padding: 15px 0;">
        <?php echo BaseHelper::clean(setting('payment_cod_description')); ?>

    </div>
</li>
<?php /**PATH C:\xampp\htdocs\work.com\platform/plugins/payment/resources/views/partials/cod.blade.php ENDPATH**/ ?>