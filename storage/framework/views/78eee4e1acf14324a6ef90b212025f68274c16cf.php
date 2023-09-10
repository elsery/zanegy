<?php if(is_plugin_active('newsletter')): ?>
    <section class="newsletter mb-15 wow animate__animated animate__fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="position-relative newsletter-inner" <?php if($config['background_image']): ?> style="background-image: url(<?php echo e(RvMedia::getImageUrl($config['background_image'])); ?>)" <?php endif; ?>>
                        <div class="newsletter-content">
                            <h2 class="mb-20">
                                <?php echo BaseHelper::clean($config['title']); ?>

                            </h2>
                            <p class="mb-45"><?php echo BaseHelper::clean($config['subtitle']); ?></p>
                            <?php echo Theme::partial('newsletter-form'); ?>

                        </div>
                        <?php if($config['image']): ?>
                            <img src="<?php echo e(RvMedia::getImageUrl($config['image'])); ?>" alt="newsletter" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/////widgets/newsletter/templates/frontend.blade.php ENDPATH**/ ?>