<section class="featured section-padding">
    <div class="container">
        <div class="row">
            <?php for($i = 1; $i <= 5; $i++): ?>
                <?php if($title = Arr::get(Arr::get($config['data'], $i), 'title')): ?>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 mt-2">
                        <div class="banner-left-icon d-flex align-items-center  fadeIn  animated"  data-wow-delay="<?php echo e($i * 2 / 10); ?>s">
                            <div class="banner-icon">
                                <img src="<?php echo e(RvMedia::getImageUrl(Arr::get(Arr::get($config['data'], $i), 'icon'), null, false, RvMedia::getDefaultImage())); ?>" alt="icon">
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title"><?php echo BaseHelper::clean($title); ?></h3>
                                <p><?php echo BaseHelper::clean(Arr::get(Arr::get($config['data'], $i), 'subtitle')); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endfor; ?>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/////widgets/site-features/templates/frontend.blade.php ENDPATH**/ ?>