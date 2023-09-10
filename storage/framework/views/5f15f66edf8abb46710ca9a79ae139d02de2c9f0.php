<?php if($update): ?>
    <a href="#" class="btn btn-info btn-trigger-edit-product-version"
        data-target="<?php echo e($update); ?>"
        data-load-form="<?php echo e($loadForm); ?>"
        data-bs-toggle="tooltip"
        title="<?php echo e(trans('plugins/ecommerce::products.edit_variation_item')); ?>">
        <i class="fa fa-edit"></i>
    </a>
<?php endif; ?>
<?php if($delete): ?>
    <a href="#" data-target="<?php echo e($delete); ?>"
        data-id="<?php echo e($item->id); ?>"
        title="<?php echo e(trans('plugins/ecommerce::products.delete')); ?>"
        data-bs-toggle="tooltip"
        class="btn-trigger-delete-version btn btn-danger">
        <i class="fa fa-trash"></i>
    </a>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/plugins/ecommerce/resources/views/products/variations/actions.blade.php ENDPATH**/ ?>