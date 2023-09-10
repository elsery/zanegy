<?php $__env->startSection('content'); ?>
    <div class="max-width-1200">
        <?php echo apply_filters('ae_notification_plus_before_settings', null); ?>

        <?php echo apply_filters('ae_notification_plus_settings', NotificationPlus::settings()); ?>

        <?php echo apply_filters('ae_notification_plus_after_settings', null); ?>

    </div>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '524127487cc67bf6520fcc367c7a3a62::modal','data' => ['id' => 'send-test-message-modal','title' => trans('plugins/notification-plus::notification-plus.send_test_message.modal_title'),'buttonLabel' => trans('plugins/notification-plus::notification-plus.send_test_message.modal_button_text')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('notification-plus::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'send-test-message-modal','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/notification-plus::notification-plus.send_test_message.modal_title')),'button-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/notification-plus::notification-plus.send_test_message.modal_button_text'))]); ?>
        <form action="<?php echo e(route('notification-plus.send-test-message')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group mb-3">
                <input type="hidden" name="driver" value="">
                <label class="control-label" for="test-notification-message"><?php echo e(trans('plugins/notification-plus::notification-plus.send_test_message.modal_message_label')); ?></label>
                <textarea class="form-control" id="test-notification-message" name="message"><?php echo e(__('You have received a test message from Notification Plus plugin on :site.', ['site' => request()->getHost()])); ?></textarea>
            </div>
        </form>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(BaseHelper::getAdminMasterLayoutTemplate(), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\work.com\platform/plugins/notification-plus/resources/views/settings.blade.php ENDPATH**/ ?>