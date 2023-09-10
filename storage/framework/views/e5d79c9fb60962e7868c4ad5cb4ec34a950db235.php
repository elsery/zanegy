<ul <?php echo $options; ?>>
    <?php $menu_nodes->loadMissing('metadata'); ?>
    <?php $__currentLoopData = $menu_nodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li <?php if($row->css_class): ?> class="<?php echo e($row->css_class); ?>" <?php endif; ?>>
            <a href="<?php echo e(url($row->url)); ?>" <?php if($row->active): ?> class="active" <?php endif; ?> target="<?php echo e($row->target); ?>">
                <?php if($iconImage = $row->getMetadata('icon_image', true)): ?>
                    <img src="<?php echo e(RvMedia::getImageUrl($iconImage)); ?>" alt="icon image" width="15" height="15" style="vertical-align: top; margin-top: 2px"/>
                <?php elseif($row->icon_font): ?><i class="menu-icon <?php echo e(trim($row->icon_font)); ?>"></i>&nbsp;<?php endif; ?><?php echo BaseHelper::clean($row->title); ?>

                <?php if($row->has_child): ?>
                    <?php if($row->parent_id): ?> <i class="fi-rs-angle-right"></i> <?php else: ?> <i class="fi-rs-angle-down"></i> <?php endif; ?>
                <?php endif; ?>
            </a>
            <?php if($row->has_child): ?>
                <?php echo Menu::generateMenu([
                        'menu'       => $menu,
                        'view'       => 'main-menu',
                        'options'    => ['class' => $row->parent_id ? 'level-menu level-menu-modify' : 'sub-menu'],
                        'menu_nodes' => $row->child,
                    ]); ?>

            <?php endif; ?>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/partials/main-menu.blade.php ENDPATH**/ ?>