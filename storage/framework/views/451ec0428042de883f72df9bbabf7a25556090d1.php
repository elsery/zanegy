<ul>
    <?php if(is_array($item['dependencies'])): ?>
        <?php $__currentLoopData = $item['dependencies']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dependencyName => $dependencyVersion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($dependencyName); ?> : <span class="label ld-version-tag"><?php echo e($dependencyVersion); ?></span></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <li><span class="label label-primary"><?php echo e($item['dependencies']); ?></span></li>
    <?php endif; ?>
</ul><?php /**PATH C:\xampp\htdocs\work.com\platform/core/base/resources/views/system/partials/info-dependencies-line.blade.php ENDPATH**/ ?>