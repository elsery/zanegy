<?php
$values = (array)$values;
?>
<?php if(sizeof($values) > 1): ?> <div class="mt-checkbox-list"> <?php endif; ?>
    <?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
        $name = $value[0] ?? '';
        $currentValue = $value[1] ?? '';
        $label = $value[2] ?? '';
        $selected = $value[3] ?? false;
        $disabled = $value[4] ?? false;
    ?>
    <label class="mb-2">
        <input type="checkbox"
               value="<?php echo e($currentValue); ?>"
               <?php echo e($selected ? 'checked' : ''); ?>

               name="<?php echo e($name); ?>" <?php echo e($disabled ? 'disabled' : ''); ?>>
        <?php echo BaseHelper::clean($label); ?>

    </label>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php if(sizeof($values) > 1): ?> </div> <?php endif; ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/core/base/resources/views/forms/partials/custom-checkbox.blade.php ENDPATH**/ ?>