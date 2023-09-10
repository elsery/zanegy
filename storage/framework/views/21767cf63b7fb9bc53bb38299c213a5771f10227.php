<div class="form-group">
    <label for="layout" class="control-label"><?php echo e(__('Layout')); ?></label>
    <?php echo Form::customSelect('layout', get_product_single_layouts(), $layout, ['class' => 'form-control']); ?>

</div>
<div class="form-group">
    <label for="is_popular" class="control-label"><?php echo e(__('Is Popular?')); ?></label>
    <?php echo Form::onOff('is_popular', $isPopular, ['class' => 'form-control']); ?>

</div>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/partials/additional-product-fields.blade.php ENDPATH**/ ?>