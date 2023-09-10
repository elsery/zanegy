<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'id' => null,
    'class' => null,
    'title' => null,
    'buttonLabel' => null,
    'type' => 'info',
    'size' => null,
    'buttonClass' => null,
    'buttonId' => null,
    'header' => null,
    'footer' => null,
    'headerIcon' => null,
    'options' => [],
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'id' => null,
    'class' => null,
    'title' => null,
    'buttonLabel' => null,
    'type' => 'info',
    'size' => null,
    'buttonClass' => null,
    'buttonId' => null,
    'header' => null,
    'footer' => null,
    'headerIcon' => null,
    'options' => [],
]); ?>
<?php foreach (array_filter(([
    'id' => null,
    'class' => null,
    'title' => null,
    'buttonLabel' => null,
    'type' => 'info',
    'size' => null,
    'buttonClass' => null,
    'buttonId' => null,
    'header' => null,
    'footer' => null,
    'headerIcon' => null,
    'options' => [],
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div <?php if($id): ?> id="<?php echo e($id); ?>" <?php endif; ?> class="<?php echo \Illuminate\Support\Arr::toCssClasses(['modal fade', $class => $class]) ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo e($id); ?>"
     aria-hidden="true" <?php if($options): ?> <?php echo Html::attributes(array_merge(['data-backdrop' => 'static', 'data-keyboard' => 'false'], $options)); ?> <?php else: ?> data-backdrop="static" data-keyboard="false" <?php endif; ?>>
    <div class="modal-dialog modal-<?php echo e(str_replace('modal-', '', $size)); ?> <?php if(! $size): ?> <?php if(strlen($slot) < 120): ?> xs <?php elseif(strlen($slot) > 1000): ?> lg <?php endif; ?> <?php endif; ?>">
        <div class="modal-content">
            <?php if($header !== false): ?>
                <?php if($header): ?>
                    <?php echo $header; ?>

                <?php else: ?>
                    <div class="modal-header bg-<?php echo e($type); ?>">
                        <h4 class="modal-title">
                            <?php if($headerIcon !== false): ?>
                                <?php echo $headerIcon; ?>

                            <?php else: ?>
                                <i class="til_img"></i>
                            <?php endif; ?>
                            <?php if($title !== false): ?>
                                <strong><?php echo $title; ?></strong>
                            <?php endif; ?>
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <div class="modal-body with-padding">
                <?php echo e($slot); ?>

            </div>

            <?php if($footer !== false): ?>
                <div class="modal-footer">
                    <?php if($footer): ?>
                        <?php echo $footer; ?>

                    <?php else: ?>
                        <button type="button" class="float-start btn btn-<?php echo e($type != 'warning' ? 'warning' : 'info'); ?>" data-bs-dismiss="modal"><?php echo e(trans('core/base::tables.cancel')); ?></button>
                        <button type="submit" class="float-end btn btn-<?php echo e($type); ?> <?php if($buttonClass): ?> <?php echo e($buttonClass); ?> <?php endif; ?>" <?php if($buttonId): ?> id="<?php echo e($buttonId); ?>" <?php endif; ?>><?php echo $buttonLabel; ?></button>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\work.com\platform/core/base/resources/views/components/modal.blade.php ENDPATH**/ ?>