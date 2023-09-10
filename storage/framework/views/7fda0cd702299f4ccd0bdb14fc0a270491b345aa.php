<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4d69f58c2cfdff5049123ae0e3ca253b::section','data' => ['title' => trans($data['name']),'description' => trans($data['description'])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-setting::section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans($data['name'])),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans($data['description']))]); ?>
    <div class="table-wrap">
        <table class="table product-list ws-nm">
            <thead>
            <tr>
                <th class="border-none-b"><?php echo e(trans('core/setting::setting.template')); ?></th>
                <th class="border-none-b"> <?php echo e(trans('core/setting::setting.description')); ?> </th>
                <?php if($type !== 'core'): ?>
                    <th class="border-none-b text-center"> <?php echo e(trans('core/setting::setting.enable')); ?></th>
                <?php else: ?>
                    <th>&nbsp;</th>
                <?php endif; ?>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $data['templates']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <a class="hover-underline a-detail-template"
                           href="<?php echo e(route('setting.email.template.edit', [$type, $module, $key])); ?>">
                            <?php echo e(trans($template['title'])); ?>

                        </a>
                    </td>
                    <td><?php echo e(trans($template['description'])); ?></td>

                    <td class="text-center template-setting-on-off">
                        <?php if($type !== 'core' && Arr::get($template, 'can_off', false)): ?>
                            <div class="form-group mb-3">
                                <?php echo Form::onOff(get_setting_email_status_key($type, $module, $key),
                                    get_setting_email_status($type, $module, $key) == 1,
                                    ['data-key' => 'email-config-status-btn', 'data-change-url' => route('setting.email.status.change')]
                                ); ?>

                            </div>
                        <?php elseif($type !== 'core'): ?>
                            <div class="form-group mb-3">
                                <?php echo Form::onOff(get_setting_email_status_key($type, $module, $key), 1,
                                    ['disabled' => true, 'readonly' => true]
                                ); ?>

                            </div>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/core/setting/resources/views/template-line.blade.php ENDPATH**/ ?>