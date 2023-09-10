<div class="banner-img wow animate__animated animate__fadeInUp <?php echo e($class ?? ''); ?>" <?php if(!empty($loop)): ?> data-wow-delay="<?php echo e($loop->iteration * 2 / 10); ?>" <?php endif; ?>>
    <img src="<?php echo e(RvMedia::getImageUrl($ads->image)); ?>" alt="<?php echo e($ads->name); ?>">
    <div class="banner-text">
        <h4><?php echo BaseHelper::clean(nl2br($ads->getMetaData('subtitle', true) ?: '')); ?></h4>
        <?php if($buttonText = $ads->getMetaData('button_text', true)): ?>
            <a href="<?php echo e(route('public.ads-click', $ads->key)); ?>" class="btn btn-xs">
                <?php echo e($buttonText); ?> <i class="fi-rs-arrow-small-right"></i>
            </a>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/partials/shortcodes/ads/item.blade.php ENDPATH**/ ?>