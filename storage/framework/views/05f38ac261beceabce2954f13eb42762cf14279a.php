<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '524127487cc67bf6520fcc367c7a3a62::setting-form','data' => ['name' => $name,'driver' => $driver,'validator' => $validator,'title' => trans('plugins/notification-plus::notification-plus.whatsapp.settings.title'),'description' => trans('plugins/notification-plus::notification-plus.whatsapp.settings.description', ['link' => Html::link('https://developers.facebook.com/apps', 'Facebook Developer', ['target' => '_blank'])->toHtml()])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('notification-plus::setting-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name),'driver' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($driver),'validator' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($validator),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/notification-plus::notification-plus.whatsapp.settings.title')),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/notification-plus::notification-plus.whatsapp.settings.description', ['link' => Html::link('https://developers.facebook.com/apps', 'Facebook Developer', ['target' => '_blank'])->toHtml()]))]); ?>
    <div class="mb-3 form-group">
        <label class="text-title-field"><?php echo e(trans('plugins/notification-plus::notification-plus.whatsapp.settings.phone_number_id')); ?></label>
        <input type="text" name="<?php echo e(NotificationPlus::getSettingKey($name, 'phone_number_id')); ?>" class="next-input" value="<?php echo e(NotificationPlus::getSetting($name, 'phone_number_id')); ?>" placeholder="10xxxxxxxxxxxxxx" />
    </div>

    <div class="mb-3 form-group">
        <label class="text-title-field"><?php echo e(trans('plugins/notification-plus::notification-plus.whatsapp.settings.access_token')); ?></label>
        <input type="password" name="<?php echo e(NotificationPlus::getSettingKey($name, 'access_token')); ?>" class="next-input" value="<?php echo e(NotificationPlus::getSetting($name, 'access_token')); ?>" placeholder="EAA..." />
    </div>

    <div class="mb-3 form-group">
        <label class="text-title-field"><?php echo e(trans('plugins/notification-plus::notification-plus.whatsapp.settings.to_phone_number')); ?></label>
        <input type="text" name="<?php echo e(NotificationPlus::getSettingKey($name, 'to_phone_number')); ?>" class="next-input" value="<?php echo e(NotificationPlus::getSetting($name, 'to_phone_number')); ?>" placeholder="84xxxxxxxx" />
        <?php echo Form::helper(trans('plugins/notification-plus::notification-plus.whatsapp.settings.to_phone_number_instruction')); ?>

        <?php echo Form::helper(__('If you don\'t have received any message from the bot, please reply to the message from the bot with any word to mark it as not spam.')); ?>

    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/plugins/notification-plus/resources/views/settings/whatsapp.blade.php ENDPATH**/ ?>