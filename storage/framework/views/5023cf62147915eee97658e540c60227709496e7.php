<div class="tools">
    <?php
        $hiddenIcons = '';
        if (Arr::get($settings, 'show_state', true) && Arr::get($settings, 'state', 'expand') == 'collapse') {
            $hiddenIcons = 'd-none';
        }
    ?>
    <?php if(Arr::get($settings, 'show_predefined_ranges', false) && count($predefinedRanges)): ?>
        <div class="predefined-ranges d-inline-block <?php echo e($hiddenIcons); ?>">
            <?php echo Form::customSelect('predefined_range', collect($predefinedRanges)->pluck('label', 'key')->all(), Arr::get($settings, 'predefined_range'), ['class' => 'py-0']); ?>

        </div>
    <?php endif; ?>

    <?php if(Arr::get($settings, 'show_state', true)): ?>
        <a href="#"
            class="<?php echo e(Arr::get($settings, 'state', 'expand')); ?> collapse-expand"
            data-bs-toggle="tooltip"
            title="<?php echo e(trans('core/dashboard::dashboard.collapse_expand')); ?>"
            data-state="<?php echo e(Arr::get($settings, 'state', 'expand') == 'collapse' ? 'expand' : 'collapse'); ?>"></a>
    <?php endif; ?>

    <?php if(Arr::get($settings, 'show_reload', true)): ?>
        <a href="#"
            class="reload <?php echo e($hiddenIcons); ?>"
            data-bs-toggle="tooltip"
            title="<?php echo e(trans('core/dashboard::dashboard.reload')); ?>"></a>
    <?php endif; ?>

    <?php if(Arr::get($settings, 'show_fullscreen', true)): ?>
        <a href="#"
            class="fullscreen <?php echo e($hiddenIcons); ?>"
            data-bs-toggle="tooltip"
            data-bs-original-title="<?php echo e(trans('core/dashboard::dashboard.fullscreen')); ?>"
            title="<?php echo e(trans('core/dashboard::dashboard.fullscreen')); ?>"> </a>
    <?php endif; ?>

    <?php if(Arr::get($settings, 'show_remove', true)): ?>
        <a href="#" class="remove" data-bs-toggle="tooltip" title="<?php echo e(trans('core/dashboard::dashboard.hide')); ?>"></a>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\work.com\platform/core/dashboard/resources/views/partials/tools.blade.php ENDPATH**/ ?>