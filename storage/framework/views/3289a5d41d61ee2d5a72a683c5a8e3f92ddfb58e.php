<div class="slider-content">
    <?php if($slider->title): ?>
        <h1 class="display-2 mb-40">
            <?php echo BaseHelper::clean($slider->title); ?>

        </h1>
    <?php endif; ?>
    <?php if($slider->description): ?>
        <p class="mb-65"><?php echo BaseHelper::clean($slider->description); ?></p>
    <?php endif; ?>
    <?php if($shortcode->show_newsletter_form == 'yes' && is_plugin_active('newsletter')): ?>
        <div class="newsletter">
            <?php echo Theme::partial('newsletter-form'); ?>

        </div>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/partials/shortcodes/sliders/content.blade.php ENDPATH**/ ?>