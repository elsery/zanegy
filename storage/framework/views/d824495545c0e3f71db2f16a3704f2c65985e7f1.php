<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '524127487cc67bf6520fcc367c7a3a62::setting-form','data' => ['name' => $name,'driver' => $driver,'validator' => $validator,'title' => trans('plugins/notification-plus::notification-plus.slack.settings.title'),'description' => trans('plugins/notification-plus::notification-plus.slack.settings.description', ['link' => Html::link('https://api.slack.com/messaging/webhooks', 'tutorial', ['target' => '_blank'])])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('notification-plus::setting-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name),'driver' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($driver),'validator' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($validator),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/notification-plus::notification-plus.slack.settings.title')),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/notification-plus::notification-plus.slack.settings.description', ['link' => Html::link('https://api.slack.com/messaging/webhooks', 'tutorial', ['target' => '_blank'])]))]); ?>
    <div class="mb-3 form-group">
        <label class="text-title-field"><?php echo e(trans('plugins/notification-plus::notification-plus.slack.settings.webhook_url')); ?></label>
        <input type="text" name="<?php echo e(NotificationPlus::getSettingKey($name, 'webhook_url')); ?>" class="next-input" value="<?php echo e(NotificationPlus::getSetting($name, 'webhook_url')); ?>" placeholder="E.g: https://hooks.slack.com/services/XXXXXXXXX/XXXXXXXXX/XXXXXXXXXXXXXXXXXXXXXXXX">
        <?php echo Form::helper(trans('plugins/notification-plus::notification-plus.slack.settings.webhook_url_instruction', ['link' => Html::link('https://t.me/BotFather', '@BotFather', ['target' => '_blank'])->toHtml()])); ?>

    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/plugins/notification-plus/resources/views/settings/slack.blade.php ENDPATH**/ ?>