<li class="list-group-item">
    <input class="magic-radio js_payment_method" type="radio" name="payment_method" id="payment_bank_transfer"
           <?php if(PaymentMethods::getSelectingMethod() == \Botble\Payment\Enums\PaymentMethodEnum::BANK_TRANSFER): ?> checked <?php endif; ?>
           value="bank_transfer">
    <label for="payment_bank_transfer" class="text-start"><?php echo e(setting('payment_bank_transfer_name', trans('plugins/payment::payment.payment_via_bank_transfer'))); ?></label>
    <div class="payment_bank_transfer_wrap payment_collapse_wrap collapse <?php if(PaymentMethods::getSelectingMethod() == \Botble\Payment\Enums\PaymentMethodEnum::BANK_TRANSFER): ?> show <?php endif; ?>" style="padding: 15px 0;">
        <?php echo BaseHelper::clean(setting('payment_bank_transfer_description')); ?>

    </div>
</li>
<?php /**PATH C:\xampp\htdocs\work.com\platform/plugins/payment/resources/views/partials/bank-transfer.blade.php ENDPATH**/ ?>