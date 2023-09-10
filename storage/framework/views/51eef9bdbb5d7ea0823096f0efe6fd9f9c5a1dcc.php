<div class="table-wrapper">
    <div class="table-responsive">
        <?php echo $dataTable->table(compact('id', 'class'), false); ?>

    </div>
</div>

<?php $__env->startPush('footer'); ?>
    <?php echo $dataTable->scripts(); ?>

<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/core/table/resources/views/simple-table.blade.php ENDPATH**/ ?>