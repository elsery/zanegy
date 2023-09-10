<div class="col-xl-3 col-lg-6 col-md-6 mb-lg-0 mb-md-2 mb-sm-2 widget-filter-item" data-type="text">
    <div class="card">
        <h5 class="mb-30 widget__title" data-title="<?php echo e($set->title); ?>" ><?php echo e(__('By :name', ['name' => $set->title])); ?></h5>
        <div class="sidebar-widget">
            <div class="list-filter size-filter ps-custom-scrollbar">
                <?php $__currentLoopData = $attributes->where('attribute_set_id', $set->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li data-slug="<?php echo e($attribute->slug); ?>">
                        <div class="tags-checkbox">
                            <label>
                                <input class="product-filter-item" type="checkbox" name="attributes[]" value="<?php echo e($attribute->id); ?>" <?php echo e(in_array($attribute->id, $selected) ? 'checked' : ''); ?>>
                                <span><i class="fi-rs- mr-10"></i> <?php echo e($attribute->title); ?></span>
                            </label>
                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/views/ecommerce/attributes/_layouts-filter/text.blade.php ENDPATH**/ ?>