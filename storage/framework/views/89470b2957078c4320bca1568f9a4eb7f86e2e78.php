<?php if($keys->count()): ?>
    <?php if($style == 'style-5'): ?>
        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <?php $__currentLoopData = $keys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3 col-md-6">
                            <?php echo display_ad($key, '', $loop); ?>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    <?php else: ?>
        <section class="banners pt-60">
            <div class="container">
                <div class="row justify-content-center">
                    <?php $__currentLoopData = $keys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6">
                            <?php echo display_ad($key, '', $loop); ?>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/partials/shortcodes/ads/items.blade.php ENDPATH**/ ?>