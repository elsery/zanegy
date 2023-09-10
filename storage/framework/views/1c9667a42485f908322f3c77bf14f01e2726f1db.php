<?php if(is_plugin_active('ecommerce')): ?>
    <div class="sidebar-widget widget-category-2 mb-30">
        <h5 class="section-title style-1 mb-30"><?php echo e($config['name']); ?></h5>
        <ul>
            <?php $__currentLoopData = get_featured_product_categories(['take' => $config['number_display'], 'withCount' => ['products'], 'with' => ['slugable', 'metadata']]); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="<?php echo e($category->url); ?>">
                        <img src="<?php echo e(RvMedia::getImageUrl($category->getMetaData('icon_image', true), null, false, RvMedia::getDefaultImage()),); ?>" alt="<?php echo e($category->name); ?>" /><?php echo e($category->name); ?>

                    </a>
                    <span class="count"><?php echo e($category->products_count); ?></span>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/////widgets/product-categories/templates/frontend.blade.php ENDPATH**/ ?>