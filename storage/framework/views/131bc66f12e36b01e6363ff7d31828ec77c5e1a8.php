<div class="footer-link-widget widget-install-app col  wow animate__animated animate__fadeInUp"  data-wow-delay=".5s">
    <h4 class="widget-title "><?php echo e($config['name']); ?></h4>
    <p><?php echo BaseHelper::clean($config['apps_description']); ?></p>
    <div class="download-app">
        <?php if($config['ios_app_url'] && $config['ios_app_image']): ?>
            <a href="<?php echo e($config['ios_app_url']); ?>" class="hover-up mb-sm-2 mb-lg-0">
                <img class="active" src="<?php echo e(RvMedia::getImageUrl($config['ios_app_image'])); ?>" alt="iOS app" />
            </a>
        <?php endif; ?>
        <?php if($config['android_app_url'] && $config['android_app_image']): ?>
            <a href="<?php echo e($config['android_app_url']); ?>" class="hover-up mb-sm-2">
                <img src="<?php echo e(RvMedia::getImageUrl($config['android_app_image'])); ?>" alt="Android app" />
            </a>
        <?php endif; ?>
    </div>
    <?php if($config['payment_gateway_description'] && $config['payment_gateway_image']): ?>
        <p class="mb-20"><?php echo e($config['payment_gateway_description']); ?></p>
        <img src="<?php echo e(RvMedia::getImageUrl($config['payment_gateway_image'])); ?>" alt="Payment gateways" />
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/////widgets/install-app/templates/frontend.blade.php ENDPATH**/ ?>