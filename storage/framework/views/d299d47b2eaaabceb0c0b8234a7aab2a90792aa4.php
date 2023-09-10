<?php $__env->startSection('content'); ?>
    <div class="max-width-1200 email-settings">
        <?php echo Form::open(['route' => ['settings.email.edit']]); ?>

            <?php if(config('core.setting.general.enable_email_smtp_settings', true)): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4d69f58c2cfdff5049123ae0e3ca253b::section','data' => ['title' => trans('core/setting::setting.email_setting_title'),'description' => trans('core/setting::setting.email.description')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-setting::section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email_setting_title')),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.description'))]); ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4d69f58c2cfdff5049123ae0e3ca253b::select','data' => ['name' => 'email_driver','label' => trans('core/setting::setting.email.mailer'),'options' => [
                            'smtp' => 'SMTP',
                            'mailgun' => 'Mailgun',
                            'ses' => 'SES',
                            'postmark' => 'Postmark',
                            'log' => 'Log',
                            'array' => 'Array',
                        ] + (function_exists('proc_open') ? ['sendmail' => 'Sendmail'] : []),'value' => setting('email_driver', config('mail.default')),'class' => 'setting-select-options']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-setting::select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'email_driver','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.mailer')),'options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
                            'smtp' => 'SMTP',
                            'mailgun' => 'Mailgun',
                            'ses' => 'SES',
                            'postmark' => 'Postmark',
                            'log' => 'Log',
                            'array' => 'Array',
                        ] + (function_exists('proc_open') ? ['sendmail' => 'Sendmail'] : [])),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('email_driver', config('mail.default'))),'class' => 'setting-select-options']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    <div data-type="smtp" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['setting-wrapper', 'hidden' => setting('email_driver', config('mail.default')) !== 'smtp']) ?>">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4d69f58c2cfdff5049123ae0e3ca253b::text-input','data' => ['name' => 'email_port','label' => trans('core/setting::setting.email.port'),'type' => 'number','dataCounter' => '10','value' => setting('email_port', config('mail.mailers.smtp.port')),'placeholder' => trans('core/setting::setting.email.port_placeholder')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-setting::text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'email_port','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.port')),'type' => 'number','data-counter' => '10','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('email_port', config('mail.mailers.smtp.port'))),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.port_placeholder'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4d69f58c2cfdff5049123ae0e3ca253b::text-input','data' => ['name' => 'email_host','label' => trans('core/setting::setting.email.host'),'type' => 'text','dataCounter' => '60','value' => setting('email_host', config('mail.mailers.smtp.host')),'placeholder' => trans('core/setting::setting.email.host_placeholder')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-setting::text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'email_host','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.host')),'type' => 'text','data-counter' => '60','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('email_host', config('mail.mailers.smtp.host'))),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.host_placeholder'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4d69f58c2cfdff5049123ae0e3ca253b::text-input','data' => ['name' => 'email_username','label' => trans('core/setting::setting.email.username'),'type' => 'text','dataCounter' => '120','value' => setting('email_username', config('mail.mailers.smtp.username')),'placeholder' => trans('core/setting::setting.email.username_placeholder')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-setting::text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'email_username','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.username')),'type' => 'text','data-counter' => '120','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('email_username', config('mail.mailers.smtp.username'))),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.username_placeholder'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4d69f58c2cfdff5049123ae0e3ca253b::text-input','data' => ['name' => 'email_password','label' => trans('core/setting::setting.email.password'),'type' => 'password','dataCounter' => '120','value' => setting('email_password', config('mail.mailers.smtp.password')),'placeholder' => trans('core/setting::setting.email.password_placeholder')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-setting::text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'email_password','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.password')),'type' => 'password','data-counter' => '120','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('email_password', config('mail.mailers.smtp.password'))),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.password_placeholder'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4d69f58c2cfdff5049123ae0e3ca253b::text-input','data' => ['name' => 'email_encryption','label' => trans('core/setting::setting.email.encryption'),'dataCounter' => '20','value' => setting('email_encryption', config('mail.mailers.smtp.encryption')),'placeholder' => trans('core/setting::setting.email.encryption_placeholder')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-setting::text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'email_encryption','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.encryption')),'data-counter' => '20','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('email_encryption', config('mail.mailers.smtp.encryption'))),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.encryption_placeholder'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>

                    <div data-type="mailgun" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['setting-wrapper', 'hidden' => setting('email_driver', config('mail.default')) !== 'mailgun']) ?>">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4d69f58c2cfdff5049123ae0e3ca253b::text-input','data' => ['name' => 'email_mail_gun_domain','label' => trans('core/setting::setting.email.mail_gun_domain'),'dataCounter' => '120','value' => setting('email_mail_gun_domain', config('services.mailgun.domain')),'placeholder' => trans('core/setting::setting.email.mail_gun_domain_placeholder')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-setting::text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'email_mail_gun_domain','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.mail_gun_domain')),'data-counter' => '120','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('email_mail_gun_domain', config('services.mailgun.domain'))),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.mail_gun_domain_placeholder'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                        <?php if(! app()->environment('demo')): ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4d69f58c2cfdff5049123ae0e3ca253b::text-input','data' => ['name' => 'email_mail_gun_secret','label' => trans('core/setting::setting.email.mail_gun_secret'),'dataCounter' => '120','value' => setting('email_mail_gun_secret', config('services.mailgun.secret')),'placeholder' => trans('core/setting::setting.email.mail_gun_secret_placeholder')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-setting::text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'email_mail_gun_secret','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.mail_gun_secret')),'data-counter' => '120','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('email_mail_gun_secret', config('services.mailgun.secret'))),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.mail_gun_secret_placeholder'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4d69f58c2cfdff5049123ae0e3ca253b::text-input','data' => ['name' => 'email_mail_gun_endpoint','label' => trans('core/setting::setting.email.mail_gun_endpoint'),'dataCounter' => '120','value' => setting('email_mail_gun_endpoint', config('services.mailgun.endpoint')),'placeholder' => trans('core/setting::setting.email.mail_gun_endpoint_placeholder')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-setting::text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'email_mail_gun_endpoint','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.mail_gun_endpoint')),'data-counter' => '120','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('email_mail_gun_endpoint', config('services.mailgun.endpoint'))),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.mail_gun_endpoint_placeholder'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>

                    <div data-type="ses" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['setting-wrapper', 'hidden' => setting('email_driver', config('mail.default')) !== 'ses']) ?>">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4d69f58c2cfdff5049123ae0e3ca253b::text-input','data' => ['name' => 'email_ses_key','label' => trans('core/setting::setting.email.ses_key'),'dataCounter' => '120','value' => setting('email_ses_key', config('services.ses.key')),'placeholder' => trans('core/setting::setting.email.ses_key_placeholder')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-setting::text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'email_ses_key','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.ses_key')),'data-counter' => '120','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('email_ses_key', config('services.ses.key'))),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.ses_key_placeholder'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                        <?php if(! app()->environment('demo')): ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4d69f58c2cfdff5049123ae0e3ca253b::text-input','data' => ['name' => 'email_ses_secret','label' => trans('core/setting::setting.email.ses_secret'),'dataCounter' => '120','value' => setting('email_ses_secret', config('services.ses.secret')),'placeholder' => trans('core/setting::setting.email.ses_secret_placeholder')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-setting::text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'email_ses_secret','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.ses_secret')),'data-counter' => '120','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('email_ses_secret', config('services.ses.secret'))),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.ses_secret_placeholder'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4d69f58c2cfdff5049123ae0e3ca253b::text-input','data' => ['name' => 'email_ses_region','label' => trans('core/setting::setting.email.ses_region'),'dataCounter' => '120','value' => setting('email_ses_region', config('services.ses.region')),'placeholder' => trans('core/setting::setting.email.ses_region_placeholder')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-setting::text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'email_ses_region','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.ses_region')),'data-counter' => '120','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('email_ses_region', config('services.ses.region'))),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.ses_region_placeholder'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>

                    <div data-type="postmark" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['setting-wrapper', 'hidden' => setting('email_driver', config('mail.default')) !== 'postmark']) ?>">
                        <?php if(! app()->environment('demo')): ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4d69f58c2cfdff5049123ae0e3ca253b::text-input','data' => ['name' => 'email_postmark_token','label' => trans('core/setting::setting.email.postmark_token'),'dataCounter' => '120','value' => setting('email_postmark_token', config('services.postmark.token')),'placeholder' => trans('core/setting::setting.email.postmark_token_placeholder')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-setting::text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'email_postmark_token','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.postmark_token')),'data-counter' => '120','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('email_postmark_token', config('services.postmark.token'))),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.postmark_token_placeholder'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php endif; ?>
                    </div>

                    <div data-type="sendmail" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['setting-wrapper', 'hidden' => setting('email_driver', config('mail.default')) !== 'sendmail']) ?>">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4d69f58c2cfdff5049123ae0e3ca253b::text-input','data' => ['name' => 'email_sendmail_path','label' => trans('core/setting::setting.email.sendmail_path'),'dataCounter' => '120','value' => setting('email_sendmail_path', config('mail.mailers.sendmail.path')),'placeholder' => trans('core/setting::setting.email.sendmail_path'),'helperText' => trans('core/setting::setting.email.default') . ': <code>' . config('mail.mailers.sendmail.path') . '</code>']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-setting::text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'email_sendmail_path','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.sendmail_path')),'data-counter' => '120','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('email_sendmail_path', config('mail.mailers.sendmail.path'))),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.sendmail_path')),'helper-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.default') . ': <code>' . config('mail.mailers.sendmail.path') . '</code>')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>

                    <div data-type="log" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['setting-wrapper', 'hidden' => setting('email_driver', config('mail.default')) !== 'log']) ?>">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4d69f58c2cfdff5049123ae0e3ca253b::select','data' => ['name' => 'email_log_channel','label' => trans('core/setting::setting.email.log_channel'),'options' => array_combine(array_keys(config('logging.channels', [])), array_keys(config('logging.channels', []))),'value' => setting('email_log_channel', config('mail.mailers.log.channel'))]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-setting::select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'email_log_channel','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.log_channel')),'options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(array_combine(array_keys(config('logging.channels', [])), array_keys(config('logging.channels', [])))),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('email_log_channel', config('mail.mailers.log.channel')))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>

                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4d69f58c2cfdff5049123ae0e3ca253b::text-input','data' => ['name' => 'email_from_name','label' => trans('core/setting::setting.email.sender_name'),'dataCounter' => '60','value' => setting('email_from_name', config('mail.from.name')),'placeholder' => trans('core/setting::setting.email.sender_name_placeholder')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-setting::text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'email_from_name','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.sender_name')),'data-counter' => '60','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('email_from_name', config('mail.from.name'))),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.sender_name_placeholder'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4d69f58c2cfdff5049123ae0e3ca253b::text-input','data' => ['name' => 'email_from_address','label' => trans('core/setting::setting.email.sender_email'),'dataCounter' => '60','value' => setting('email_from_address', config('mail.from.address')),'placeholder' => 'admin@example.com']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-setting::text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'email_from_address','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.email.sender_email')),'data-counter' => '60','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('email_from_address', config('mail.from.address'))),'placeholder' => 'admin@example.com']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    <button class="btn btn-info send-test-email-trigger-button" type="button" data-saving="<?php echo e(trans('core/setting::setting.saving')); ?>">
                        <?php echo e(trans('core/setting::setting.test_send_mail')); ?>

                    </button>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php echo apply_filters(BASE_FILTER_AFTER_SETTING_EMAIL_CONTENT, null); ?>


            <div class="flexbox-annotated-section" style="border: none">
                <div class="flexbox-annotated-section-annotation">&nbsp;</div>
                <div class="flexbox-annotated-section-content">
                    <button class="btn btn-info" type="submit"><?php echo e(trans('core/setting::setting.save_settings')); ?></button>
                </div>
            </div>
        <?php echo Form::close(); ?>

    </div>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4adee881124d59d5169d70c32aadeace::modal','data' => ['id' => 'send-test-email-modal','title' => trans('core/setting::setting.test_email_modal_title'),'type' => 'info','buttonId' => 'send-test-email-btn','buttonLabel' => trans('core/setting::setting.send')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-base::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'send-test-email-modal','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.test_email_modal_title')),'type' => 'info','button-id' => 'send-test-email-btn','button-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.send'))]); ?>
        <p><?php echo e(trans('core/setting::setting.test_email_description')); ?></p>
        <div class="form-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="<?php echo e(trans('core/setting::setting.test_email_input_placeholder')); ?>">
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(BaseHelper::getAdminMasterLayoutTemplate(), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\work.com\platform/core/setting/resources/views/email.blade.php ENDPATH**/ ?>