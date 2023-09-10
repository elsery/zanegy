<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'title',
    'description' => null,
    'name',
    'driver',
    'validator' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'title',
    'description' => null,
    'name',
    'driver',
    'validator' => null,
]); ?>
<?php foreach (array_filter(([
    'title',
    'description' => null,
    'name',
    'driver',
    'validator' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="flexbox-annotated-section">
    <div class="flexbox-annotated-section-annotation">
        <div class="annotated-section-title pd-all-20">
            <h2><?php echo $title; ?></h2>
        </div>
        <?php if($description): ?>
            <div class="annotated-section-description pd-all-20 p-none-t">
                <p class="color-note"><?php echo $description; ?></p>
            </div>
        <?php endif; ?>
    </div>

    <div class="flexbox-annotated-section-content">
        <form action="<?php echo e(route('notification-plus.settings')); ?>" method="post" class="wrapper-content pd-all-20 notification-settings-form" id="<?php echo e($name); ?>-settings-form">
            <?php echo csrf_field(); ?>

            <input type="hidden" name="driver" value="<?php echo e($name); ?>">

            <div>
                <input type="hidden" name="<?php echo e(NotificationPlus::getSettingKey($name, 'enable')); ?>" value="0">
                <label>
                    <input type="checkbox" class="enable-notification-item-checkbox" value="1" name="<?php echo e(NotificationPlus::getSettingKey($name, 'enable')); ?>" id="notification_<?php echo e($name); ?>_enable" <?php if(NotificationPlus::getSetting($name, 'enable')): echo 'checked'; endif; ?>>
                    <?php echo e(trans("plugins/notification-plus::notification-plus.settings.enable")); ?>

                </label>
            </div>

            <div class="mt-3 notification-wrapper" <?php if(! NotificationPlus::getSetting($name, 'enable')): ?> style="display: none;" <?php endif; ?>>
                <?php echo e($slot); ?>


                <button type="submit" class="btn btn-info">
                    <?php echo e(trans('core/setting::setting.save_settings')); ?>

                </button>
                <button type="button" class="btn btn-warning send-test-message" data-driver="<?php echo e($driver); ?>">
                    <?php echo e(trans('plugins/notification-plus::notification-plus.send_test_message.button_text')); ?>

                </button>
            </div>
        </form>
    </div>
</div>

<?php if($validator): $__env->startPush( 'footer'); ?>
    <?php echo JsValidator::formRequest($validator, '#' . $name . '-settings-form'); ?>

<?php $__env->stopPush(); endif; ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/plugins/notification-plus/resources/views/components/setting-form.blade.php ENDPATH**/ ?>