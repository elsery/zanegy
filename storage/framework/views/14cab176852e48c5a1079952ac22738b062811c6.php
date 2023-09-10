<?php $__currentLoopData = $productAttributeSets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attributeSet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <label>
        <input type="checkbox" class="attribute-set-item" name="attribute_sets[]" value="<?php echo e($attributeSet->id); ?>" <?php if($attributeSet->is_selected): echo 'checked'; endif; ?>>
        <?php echo e($attributeSet->title); ?>

    </label> &nbsp;
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="alert alert-warning mt-3">
    <span><?php echo e(trans('plugins/ecommerce::products.this_action_will_reload_page')); ?></span>
</div>
<?php /**PATH C:\xampp\htdocs\work.com\platform/plugins/ecommerce/resources/views/products/partials/attribute-sets.blade.php ENDPATH**/ ?>