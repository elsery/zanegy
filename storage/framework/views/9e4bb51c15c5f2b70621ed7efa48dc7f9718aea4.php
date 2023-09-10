<div id="product-variations-wrapper">
    <div class="variation-actions">
        <a href="#" class="btn-trigger-delete-selected-variations text-danger" style="display: none" data-target="<?php echo e(route('products.delete-versions')); ?>"><?php echo e(trans('plugins/ecommerce::products.delete_selected_variations')); ?></a>
        <a href="#" class="btn-trigger-select-product-attributes" data-target="<?php echo e(route('products.store-related-attributes', $product->id)); ?>"><?php echo e(trans('plugins/ecommerce::products.edit_attribute')); ?></a>
        <a href="#" class="btn-trigger-generate-all-versions" data-target="<?php echo e(route('products.generate-all-versions', $product->id)); ?>"><?php echo e(trans('plugins/ecommerce::products.generate_all_variations')); ?></a>
    </div>

    <?php echo $productVariationTable->renderTable(); ?>


    <br>
    <a href="#" class="btn-trigger-add-new-product-variation"
       data-target="<?php echo e(route('products.add-version', $product->id)); ?>"
       data-load-form="<?php echo e(route('products.get-version-form', ['id' => 0, 'product_id' => $product->id])); ?>"
       data-processing="<?php echo e(trans('plugins/ecommerce::products.processing')); ?>"
    ><?php echo e(trans('plugins/ecommerce::products.add_new_variation')); ?></a>
</div>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4adee881124d59d5169d70c32aadeace::modal','data' => ['id' => 'select-attribute-sets-modal','title' => trans('plugins/ecommerce::products.select_attribute'),'buttonId' => 'store-related-attributes-button','buttonLabel' => trans('plugins/ecommerce::products.save_changes')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-base::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'select-attribute-sets-modal','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.select_attribute')),'button-id' => 'store-related-attributes-button','button-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.save_changes'))]); ?>
    <?php echo view('plugins/ecommerce::products.partials.attribute-sets', compact('productAttributeSets'))->render(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php $__env->startPush('footer'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4adee881124d59d5169d70c32aadeace::modal','data' => ['id' => 'add-new-product-variation-modal','title' => trans('plugins/ecommerce::products.add_new_variation'),'buttonId' => 'store-product-variation-button','buttonLabel' => trans('plugins/ecommerce::products.save_changes'),'size' => 'lg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-base::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'add-new-product-variation-modal','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.add_new_variation')),'button-id' => 'store-product-variation-button','button-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.save_changes')),'size' => 'lg']); ?>
        <?php echo view('core/base::elements.loading')->render(); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4adee881124d59d5169d70c32aadeace::modal','data' => ['id' => 'edit-product-variation-modal','title' => trans('plugins/ecommerce::products.add_new_variation'),'buttonId' => 'update-product-variation-button','buttonLabel' => trans('plugins/ecommerce::products.save_changes'),'size' => 'lg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-base::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'edit-product-variation-modal','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.add_new_variation')),'button-id' => 'update-product-variation-button','button-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.save_changes')),'size' => 'lg']); ?>
        <?php echo view('core/base::elements.loading')->render(); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4adee881124d59d5169d70c32aadeace::modal','data' => ['id' => 'generate-all-versions-modal','title' => trans('plugins/ecommerce::products.generate_all_variations'),'buttonId' => 'generate-all-versions-button','buttonLabel' => trans('plugins/ecommerce::products.continue')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-base::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'generate-all-versions-modal','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.generate_all_variations')),'button-id' => 'generate-all-versions-button','button-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.continue'))]); ?>
        <?php echo e(trans('plugins/ecommerce::products.generate_all_variations_confirmation')); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4adee881124d59d5169d70c32aadeace::modal','data' => ['id' => 'confirm-delete-version-modal','title' => trans('plugins/ecommerce::products.delete_variation'),'type' => 'danger','buttonId' => 'delete-version-button','buttonLabel' => trans('plugins/ecommerce::products.continue')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-base::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'confirm-delete-version-modal','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.delete_variation')),'type' => 'danger','button-id' => 'delete-version-button','button-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.continue'))]); ?>
        <?php echo e(trans('plugins/ecommerce::products.delete_variation_confirmation')); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4adee881124d59d5169d70c32aadeace::modal','data' => ['id' => 'delete-variations-modal','title' => trans('plugins/ecommerce::products.delete_variations'),'type' => 'danger','buttonId' => 'delete-selected-variations-button','buttonLabel' => trans('plugins/ecommerce::products.continue')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-base::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'delete-variations-modal','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.delete_variations')),'type' => 'danger','button-id' => 'delete-selected-variations-button','button-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.continue'))]); ?>
        <?php echo e(trans('plugins/ecommerce::products.delete_variations_confirmation')); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/plugins/ecommerce/resources/views/products/partials/configurable.blade.php ENDPATH**/ ?>