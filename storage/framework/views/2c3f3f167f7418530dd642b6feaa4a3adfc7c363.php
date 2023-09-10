<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4d69f58c2cfdff5049123ae0e3ca253b::section','data' => ['title' => trans('plugins/simple-slider::simple-slider.settings.title'),'description' => trans('plugins/simple-slider::simple-slider.settings.description')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-setting::section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/simple-slider::simple-slider.settings.title')),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/simple-slider::simple-slider.settings.description'))]); ?>
    <div class="form-group mb-3">
        <label class="text-title-field"
               for="simple_slider_using_assets"><?php echo e(trans('plugins/simple-slider::simple-slider.settings.using_assets')); ?>

        </label>
        <label class="me-2">
            <input type="radio" name="simple_slider_using_assets"
                   value="1"
                   <?php if(setting('simple_slider_using_assets', true)): ?> checked <?php endif; ?>><?php echo e(trans('core/setting::setting.general.yes')); ?>

        </label>
        <label>
            <input type="radio" name="simple_slider_using_assets"
                   value="0"
                   <?php if(!setting('simple_slider_using_assets', true)): ?> checked <?php endif; ?>><?php echo e(trans('core/setting::setting.general.no')); ?>

        </label>
    </div>
    <div class="form-group mb-3">
        <p><?php echo e(trans('plugins/simple-slider::simple-slider.settings.using_assets_description')); ?></p>
        <pre><strong>
/vendor/core/plugins/simple-slider/libraries/owl-carousel/owl.carousel.css
/vendor/core/plugins/simple-slider/css/simple-slider.css
/vendor/core/plugins/simple-slider/libraries/owl-carousel/owl.carousel.js
/vendor/core/plugins/simple-slider/js/simple-slider.js
        </strong></pre>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/plugins/simple-slider/resources/views/setting.blade.php ENDPATH**/ ?>