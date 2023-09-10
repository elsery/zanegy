<?php if(is_plugin_active('ads') && $config['ads_key']): ?>
    <?php
        $ads = AdsManager::getData()->where('key', $config['ads_key'])->first();
    ?>
    <?php if($ads): ?>
    <div class="banner-img wow fadeIn mb-lg-0 animated d-lg-block d-none">
        <img src="<?php echo e(RvMedia::getImageUrl($ads->image)); ?>" alt="<?php echo e($ads->name); ?>" />
        <div class="banner-text">
            <span><?php echo e($config['name'] ?: $ads->name); ?></span>
            <h4><?php echo BaseHelper::clean($ads->getMetadata('subtitle', true)); ?></h4>
            <a href="<?php echo e(route('public.ads-click', $ads->key)); ?>"  class="btn btn-xs">
                <?php echo e($ads->getMetaData('button_text', true) ?: __('Shop Now')); ?> <i class="fi-rs-arrow-small-right"></i>
            </a>
        </div>
    </div>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/////widgets/ads/templates/frontend.blade.php ENDPATH**/ ?>