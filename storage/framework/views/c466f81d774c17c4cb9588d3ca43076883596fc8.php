<ul <?php echo $options; ?>>
    <?php $menu_nodes->loadMissing('metadata'); ?>
    <?php $__currentLoopData = $menu_nodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li <?php if($row->css_class || $row->active): ?> class="<?php if($row->css_class): ?> <?php echo e($row->css_class); ?> <?php endif; ?> <?php if($row->active): ?> current <?php endif; ?>" <?php endif; ?>>
            <a href="<?php echo e(url($row->url)); ?>" <?php if($row->target !== '_self'): ?> target="<?php echo e($row->target); ?>" <?php endif; ?> title="<?php echo e($row->title); ?>">
                <?php if($iconImage = $row->getMetadata('icon_image', true)): ?>
                    <img src="<?php echo e(RvMedia::getImageUrl($iconImage)); ?>" alt="icon image" width="15" height="15" style="vertical-align: top; margin-top: -1px"/>
                <?php elseif($row->icon_font): ?><i class="menu-icon <?php echo e(trim($row->icon_font)); ?>"></i> <?php endif; ?>
                <span><?php echo BaseHelper::clean($row->title); ?></span>
            </a>
            <?php if($row->has_child): ?>
                <?php echo Menu::generateMenu([
                    'menu'       => $menu,
                    'menu_nodes' => $row->child
                ]); ?>

            <?php endif; ?>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/partials/header-menu.blade.php ENDPATH**/ ?>