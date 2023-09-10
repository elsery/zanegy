<?php $__env->startSection('head'); ?>
    <?php echo RvMedia::renderHeader(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo RvMedia::renderContent(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    <?php echo RvMedia::renderFooter(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(BaseHelper::getAdminMasterLayoutTemplate(), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\work.com\platform/core/media/resources/views/index.blade.php ENDPATH**/ ?>