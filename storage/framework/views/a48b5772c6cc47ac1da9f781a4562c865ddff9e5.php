<div class="col-xl-3 col-lg-6 col-md-6 mb-lg-0 mb-md-2 mb-sm-2 widget-filter-item" data-type="visual">
    <div class="card">
        <h5 class="mb-30 widget__title" data-title="<?php echo e($set->title); ?>"><?php echo e(__('By :name', ['name' => $set->title])); ?></h5>
        <ul class="list-filter ps-custom-scrollbar">
            <?php $__currentLoopData = $attributes->where('attribute_set_id', $set->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li data-slug="<?php echo e($attribute->slug); ?>"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="<?php echo e($attribute->title); ?>"
                    class="mx-1">
                    <div class="custom-checkbox">
                        <label>
                            <input class="form-control product-filter-item" type="checkbox" name="attributes[]" value="<?php echo e($attribute->id); ?>" <?php echo e(in_array($attribute->id, $selected) ? 'checked' : ''); ?>>
			    <span style="<?php echo e($attribute->getAttributeStyle()); ?>"></span>
                        </label>
                    </div>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/views/ecommerce/attributes/_layouts-filter/visual.blade.php ENDPATH**/ ?>