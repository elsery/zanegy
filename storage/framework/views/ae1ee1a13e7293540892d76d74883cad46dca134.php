<?php
    $allowThumb = Arr::get($attributes, 'allow_thumb', true);
    $defaultImage = Arr::get($attributes, 'default_image', RvMedia::getDefaultImage());
?>
<div class="image-box">
    <input type="hidden" name="<?php echo e($name); ?>" value="<?php echo e($value); ?>" class="image-data">
    <?php if(! is_in_admin(true) || ! auth()->check()): ?>
        <input type="file" <?php if($name): ?> name="<?php echo e($name); ?>_input" <?php endif; ?> class="media-image-input" <?php if(! isset($attributes['action']) || $attributes['action'] == 'select-image'): ?> accept="image/*" <?php endif; ?> style="display: none;">
    <?php endif; ?>
    <div class="preview-image-wrapper <?php if(!$allowThumb): ?> preview-image-wrapper-not-allow-thumb <?php endif; ?>">
        <img src="<?php echo e($image ?? RvMedia::getImageUrl($value, $allowThumb ? 'thumb' : null, false, $defaultImage)); ?>"
            data-default="<?php echo e($defaultImage); ?>"
            alt="<?php echo e(trans('core/base::base.preview_image')); ?>"
            class="preview_image" <?php if($allowThumb): ?> width="150" <?php endif; ?>>
        <a class="btn_remove_image" title="<?php echo e(trans('core/base::forms.remove_image')); ?>">
            <i class="fa fa-times"></i>
        </a>
    </div>
    <div class="image-box-actions">
        <a href="#" class="<?php if(is_in_admin(true) && auth()->check()): ?> btn_gallery <?php else: ?> media-select-image <?php endif; ?>" data-result="<?php echo e($name); ?>"
            data-action="<?php echo e($attributes['action'] ?? 'select-image'); ?>" data-allow-thumb="<?php echo e($allowThumb == true); ?>">
            <?php echo e(trans('core/base::forms.choose_image')); ?>

        </a>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\work.com\platform/core/base/resources/views/forms/partials/image.blade.php ENDPATH**/ ?>