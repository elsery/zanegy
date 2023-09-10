<?php $__currentLoopData = !$more ? $categories->take(10)->chunk(5) : $categories->skip(10)->chunk(ceil((count($categories) - 10) / 2)); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <ul <?php if($loop->last): ?> class="end" <?php endif; ?>>
        <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="<?php echo e($category->url); ?>">
                    <?php if($category->getMetaData('icon_image', true)): ?>
                        <img src="<?php echo e(RvMedia::getImageUrl($category->getMetaData('icon_image', true))); ?>" alt="<?php echo e($category->name); ?>" width="30" height="30">
                    <?php elseif($category->getMetaData('icon', true)): ?>
                        <i class="<?php echo e($category->getMetaData('icon', true)); ?>"></i>
                    <?php endif; ?> <?php echo BaseHelper::clean($category->name); ?>

                </a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/partials/product-categories-dropdown.blade.php ENDPATH**/ ?>