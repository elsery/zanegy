<?php if(is_plugin_active('newsletter')): ?>
    <form class="newsletter-form <?php echo e($className ?? ''); ?>" method="post" action="<?php echo e(route('public.newsletter.subscribe')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-subscribe d-flex">
            <input type="email" name="email" placeholder="<?php echo e(__('Your email address')); ?>" />
            <button class="btn" type="submit"><?php echo e(__('Subscribe')); ?></button>
        </div>

        <?php if(setting('enable_captcha') && is_plugin_active('captcha')): ?>
            <div class="col-auto">
                <?php echo Captcha::display(); ?>

            </div>
        <?php endif; ?>
    </form>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/partials/newsletter-form.blade.php ENDPATH**/ ?>