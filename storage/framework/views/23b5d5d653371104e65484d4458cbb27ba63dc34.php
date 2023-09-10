<div class="hero-slider-1 dot-style-1 dot-style-1-position-1 <?php echo e($class ?? ''); ?>">
    <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($slider->link && !($shortcode->show_newsletter_form == 'yes' && is_plugin_active('newsletter'))): ?>
            <a href="<?php echo e(url($slider->link)); ?>">
        <?php endif; ?>

        <?php
            $tabletImage = $slider->getMetaData('tablet_image', true) ?: $slider->image;
            $mobileImage = $slider->getMetaData('mobile_image', true) ?: $tabletImage;
        ?>

        <div class="single-hero-slider single-animation-wrap <?php echo e($itemClass ?? ''); ?>" style="<?php if(!$loop->first): ?> display: none; <?php endif; ?>"
         data-original-image="<?php echo e(RvMedia::getImageUrl($slider->image, null, false, RvMedia::getDefaultImage())); ?>"
         <?php if($tabletImage): ?> data-tablet-image="<?php echo e(RvMedia::getImageUrl($tabletImage, null, false, RvMedia::getDefaultImage())); ?>" <?php endif; ?>
         <?php if($mobileImage): ?> data-mobile-image="<?php echo e(RvMedia::getImageUrl($mobileImage, null, false, RvMedia::getDefaultImage())); ?>" <?php endif; ?>
        >
            <?php echo Theme::partial('shortcodes.sliders.content', compact('slider', 'shortcode')); ?>

        </div>

        <?php if($slider->link && !($shortcode->show_newsletter_form == 'yes' && is_plugin_active('newsletter'))): ?>
            </a>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="slider-arrow hero-slider-1-arrow"></div>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/partials/shortcodes/sliders/grid.blade.php ENDPATH**/ ?>