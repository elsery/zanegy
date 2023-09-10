<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'id',
    'title',
    'size' => null,
    'type' => 'info',
    'buttonLabel',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'id',
    'title',
    'size' => null,
    'type' => 'info',
    'buttonLabel',
]); ?>
<?php foreach (array_filter(([
    'id',
    'title',
    'size' => null,
    'type' => 'info',
    'buttonLabel',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div id="<?php echo e($id); ?>" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog <?php echo e($size); ?> <?php if(! $size): ?> <?php if(strlen($slot) < 120): ?> modal-xs <?php elseif(strlen($slot) > 1000): ?> modal-lg <?php endif; ?> <?php endif; ?>">
        <div class="modal-content">
            <div class="modal-header bg-<?php echo e($type); ?>">
                <h4 class="modal-title"><i class="til_img"></i><strong><?php echo $title; ?></strong></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">

                </button>
            </div>

            <div class="modal-body with-padding">
                <?php echo e($slot); ?>

            </div>

            <div class="modal-footer">
                <button type="button" class="float-start btn btn-<?php echo e($type); ?>" data-bs-dismiss="modal"><?php echo e(trans('core/base::tables.cancel')); ?></button>
                <button type="submit" class="float-end btn btn-<?php echo e($type); ?>"><?php echo $buttonLabel; ?></button>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\work.com\platform/plugins/notification-plus/resources/views/components/modal.blade.php ENDPATH**/ ?>