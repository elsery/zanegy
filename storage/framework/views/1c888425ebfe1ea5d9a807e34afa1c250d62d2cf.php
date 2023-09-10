<?php if(is_plugin_active('simple-slider') && $config['slider_key']): ?>
    <?php
        $slider = app(Botble\SimpleSlider\Repositories\Interfaces\SimpleSliderInterface::class)->getFirstBy(['key' => $config['slider_key']]);
    ?>
    <?php if($slider && $slider->sliderItems && $slider->sliderItems->count()): ?>
        <div class="sidebar-widget widget_instagram mb-50">
            <h5 class="section-title style-1 mb-30"><?php echo e($config['name']); ?></h5>
            <div class="instagram-gellay">
                <ul class="insta-feed img-popup">
                    <?php $__currentLoopData = $slider->sliderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li href="<?php echo e(RvMedia::getImageUrl($item->image)); ?>">
                            <a href="<?php echo e(RvMedia::getImageUrl($item->image)); ?>"><img class="border-radius-5" src="<?php echo e(RvMedia::getImageUrl($item->image)); ?>" alt="<?php echo e($item->name ?: $slider->name); ?>" /></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/////widgets/gallery/templates/frontend.blade.php ENDPATH**/ ?>