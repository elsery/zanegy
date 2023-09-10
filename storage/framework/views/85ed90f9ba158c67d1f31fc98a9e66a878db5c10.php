<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '524127487cc67bf6520fcc367c7a3a62::setting-form','data' => ['name' => $name,'driver' => $driver,'validator' => $validator,'title' => trans('plugins/notification-plus::notification-plus.telegram.settings.title'),'description' => trans('plugins/notification-plus::notification-plus.telegram.settings.description', ['link' => Html::link('https://core.telegram.org/bots/features#creating-a-new-bot', 'Creating a new bot', ['target' => '_blank'])->toHtml()])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('notification-plus::setting-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name),'driver' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($driver),'validator' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($validator),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/notification-plus::notification-plus.telegram.settings.title')),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/notification-plus::notification-plus.telegram.settings.description', ['link' => Html::link('https://core.telegram.org/bots/features#creating-a-new-bot', 'Creating a new bot', ['target' => '_blank'])->toHtml()]))]); ?>
    <div class="mb-3 form-group">
        <label class="text-title-field"><?php echo e(trans('plugins/notification-plus::notification-plus.telegram.settings.bot_token')); ?></label>
        <input type="text" name="<?php echo e(NotificationPlus::getSettingKey($name, 'bot_token')); ?>" class="next-input js-telegram-bot-token" value="<?php echo e(NotificationPlus::getSetting($name, 'bot_token')); ?>" placeholder="E.g: 123456:ABC-DEF1234ghIkl-zyx57W2v1u123ew11">
        <?php echo Form::helper(trans('plugins/notification-plus::notification-plus.telegram.settings.bot_token_instruction', ['link' => Html::link('https://t.me/BotFather', '@BotFather', ['target' => '_blank'])->toHtml()])); ?>

    </div>

    <div class="mb-3 telegram-chat-id-wrapper" <?php if(! NotificationPlus::getSetting($name, 'bot_token')): ?> style="display: none" <?php endif; ?>>
        <div class="input-group">
            <input type="text" name="<?php echo e(NotificationPlus::getSettingKey($name, 'chat_id')); ?>" class="form-control next-input" value="<?php echo e(NotificationPlus::getSetting($name, 'chat_id')); ?>" placeholder="E.g: -1001824073962">
            <button type="button" class="btn btn-warning" id="get-telegram-chat-ids">
                <?php echo e(trans('plugins/notification-plus::notification-plus.telegram.settings.get_chat_ids')); ?>

            </button>
        </div>
        <?php echo Form::helper(trans('plugins/notification-plus::notification-plus.telegram.settings.chat_id_instruction')); ?>


        <ul id="telegram-list-chat-ids"></ul>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/plugins/notification-plus/resources/views/settings/telegram.blade.php ENDPATH**/ ?>