<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '524127487cc67bf6520fcc367c7a3a62::setting-form','data' => ['name' => $name,'driver' => $driver,'validator' => $validator,'title' => trans('plugins/notification-plus::notification-plus.vonage.settings.title'),'description' => trans('plugins/notification-plus::notification-plus.vonage.settings.description', ['link' => Html::link('https://dashboard.nexmo.com/', 'Nexmo.com', ['target' => '_blank'])])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('notification-plus::setting-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name),'driver' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($driver),'validator' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($validator),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/notification-plus::notification-plus.vonage.settings.title')),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/notification-plus::notification-plus.vonage.settings.description', ['link' => Html::link('https://dashboard.nexmo.com/', 'Nexmo.com', ['target' => '_blank'])]))]); ?>
    <div class="mb-3 form-group">
        <label class="text-title-field"><?php echo e(trans('plugins/notification-plus::notification-plus.vonage.settings.api_key')); ?></label>
        <input type="text" name="<?php echo e(NotificationPlus::getSettingKey($name, 'api_key')); ?>" class="next-input" value="<?php echo e(NotificationPlus::getSetting($name, 'api_key')); ?>" />
        <?php echo Form::helper(trans('plugins/notification-plus::notification-plus.vonage.settings.api_key_instruction')); ?>

    </div>
    <div class="mb-3 form-group">
        <label class="text-title-field"><?php echo e(trans('plugins/notification-plus::notification-plus.vonage.settings.api_secret')); ?></label>
        <input type="text" name="<?php echo e(NotificationPlus::getSettingKey($name, 'api_secret')); ?>" class="next-input" value="<?php echo e(NotificationPlus::getSetting($name, 'api_secret')); ?>" />
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="mb-3 form-group">
                <label class="text-title-field"><?php echo e(trans('plugins/notification-plus::notification-plus.vonage.settings.from')); ?></label>
                <input type="text" name="<?php echo e(NotificationPlus::getSettingKey($name, 'from')); ?>" class="next-input" value="<?php echo e(NotificationPlus::getSetting($name, 'from')); ?>" />
                <?php echo Form::helper(trans('plugins/notification-plus::notification-plus.vonage.settings.from_instruction')); ?>

            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3 form-group">
                <label class="text-title-field"><?php echo e(trans('plugins/notification-plus::notification-plus.vonage.settings.to')); ?></label>
                <input type="text" name="<?php echo e(NotificationPlus::getSettingKey($name, 'to')); ?>" class="next-input" value="<?php echo e(NotificationPlus::getSetting($name, 'to')); ?>" />
                <?php echo Form::helper(trans('plugins/notification-plus::notification-plus.vonage.settings.to_instruction')); ?>

            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/plugins/notification-plus/resources/views/settings/vonage.blade.php ENDPATH**/ ?>