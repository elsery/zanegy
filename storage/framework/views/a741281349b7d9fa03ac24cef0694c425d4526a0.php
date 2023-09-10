<?php if(is_plugin_active('simple-slider') && count($sliders) > 0 &&
    $sliders->loadMissing('metadata') && $slider->loadMissing('metadata')): ?>
    <?php
        $style = $slider->getMetaData('simple_slider_style', true);
    ?>
    <?php if($style == 'style-3'): ?>
        <section class="home-slider position-relative mt-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="position-relative">
                            <div class="hero-slider-1 style-3 dot-style-1 dot-style-1-position-1">
                                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($slider->link && !($shortcode->show_newsletter_form == 'yes' && is_plugin_active('newsletter'))): ?>
                                        <a href="<?php echo e(url($slider->link)); ?>">
                                    <?php endif; ?>

                                    <div class="single-hero-slider single-animation-wrap" <?php if(!$loop->first): ?> style="display: none;" <?php endif; ?>>
                                        <div class="container">
                                            <div class="slider-1-height-3 slider-animated-1">
                                                <?php echo Theme::partial('shortcodes.sliders.content', compact('slider', 'shortcode')); ?>

                                                <div class="slider-img">
                                                    <?php
                                                        $tabletImage = $slider->getMetaData('tablet_image', true) ?: $slider->image;
                                                        $mobileImage = $slider->getMetaData('mobile_image', true) ?: $tabletImage;
                                                    ?>
                                                    <picture>
                                                        <source srcset="<?php echo e(RvMedia::getImageUrl($slider->image, null, false, RvMedia::getDefaultImage())); ?>" media="(min-width: 1200px)" />
                                                        <source srcset="<?php echo e(RvMedia::getImageUrl($tabletImage, null, false, RvMedia::getDefaultImage())); ?>" media="(min-width: 768px)" />
                                                        <source srcset="<?php echo e(RvMedia::getImageUrl($mobileImage, null, false, RvMedia::getDefaultImage())); ?>" media="(max-width: 767px)" />
                                                        <img src="<?php echo e(RvMedia::getImageUrl($slider->image, null, false, RvMedia::getDefaultImage())); ?>" alt="image">
                                                    </picture>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php if($slider->link && !($shortcode->show_newsletter_form == 'yes' && is_plugin_active('newsletter'))): ?>
                                        </a>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="slider-arrow hero-slider-1-arrow style-3"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-md-none d-lg-block">
                        <?php if(is_plugin_active('ads')): ?>
                            <?php $__currentLoopData = get_ads_keys_from_shortcode($shortcode); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo display_ad($key, 'banner-' . ($loop->index + 1)); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php elseif($style == 'style-4'): ?>
        <section class="home-slider position-relative mb-30 mt-30">
            <div class="container">
                <div class="home-slide-cover mt-30">
                    <?php echo Theme::partial('shortcodes.sliders.grid', compact('sliders', 'shortcode') + ['class' => 'style-4']); ?>

                </div>
            </div>
        </section>
    <?php elseif($style == 'style-2'): ?>
        <section class="home-slider style-2 position-relative mb-50" <?php if($shortcode->cover_image): ?> style="background-image: url(<?php echo e(RvMedia::getImageUrl($shortcode->cover_image)); ?>);" <?php endif; ?>>
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-12">
                        <div class="home-slide-cover">
                            <div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">
                                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($slider->link && !($shortcode->show_newsletter_form == 'yes' && is_plugin_active('newsletter'))): ?>
                                        <a href="<?php echo e(url($slider->link)); ?>">
                                    <?php endif; ?>

                                    <?php
                                        $tabletImage = $slider->getMetaData('tablet_image', true) ?: $slider->image;
                                        $mobileImage = $slider->getMetaData('mobile_image', true) ?: $tabletImage;
                                    ?>

                                    <div class="single-hero-slider single-animation-wrap" style="<?php if(!$loop->first): ?> display: none; <?php endif; ?>"
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
                        </div>
                    </div>
                    <div class="col-lg-4 d-none d-xl-block">
                        <?php if(is_plugin_active('ads')): ?>
                            <?php $__currentLoopData = get_ads_keys_from_shortcode($shortcode); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo display_ad($key); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php elseif($style == 'style-5'): ?>
        <section class="home-slider position-relative mb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 d-none d-lg-flex">
                        <?php
                            $categories = !is_plugin_active('ecommerce') ? collect() : ProductCategoryHelper::getAllProductCategories()
                                ->where('status', \Botble\Base\Enums\BaseStatusEnum::PUBLISHED)
                                ->where('parent_id', 0);
                        ?>
                        <?php if($categories->count()): ?>
                            <div class="categories-dropdown-wrap style-2 font-heading mt-30">
                                <div class="d-flex categori-dropdown-inner">
                                    <ul>
                                        <?php $__currentLoopData = $categories->take(10); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <a href="<?php echo e($category->url); ?>">
                                                    <?php if($category->getMetaData('icon_image', true)): ?>
                                                        <img src="<?php echo e(RvMedia::getImageUrl($category->getMetaData('icon_image', true))); ?>" alt="<?php echo e($category->name); ?>" width="30" height="30">
                                                    <?php elseif($category->getMetaData('icon', true)): ?>
                                                        <i class="<?php echo e($category->getMetaData('icon', true)); ?>"></i>
                                                    <?php endif; ?> <?php echo BaseHelper::clean($category->name); ?>

                                                </a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                                <?php if($categories->count() > 10): ?>
                                <div class="more_slide_open" style="display: none">
                                    <div class="d-flex categori-dropdown-inner">
                                        <ul>
                                            <?php $__currentLoopData = $categories->skip(10); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li>
                                                    <a href="<?php echo e($category->url); ?>">
                                                        <?php if($category->getMetaData('icon_image', true)): ?>
                                                            <img src="<?php echo e(RvMedia::getImageUrl($category->getMetaData('icon_image', true))); ?>" alt="<?php echo e($category->name); ?>" width="30" height="30">
                                                        <?php elseif($category->getMetaData('icon', true)): ?>
                                                            <i class="<?php echo e($category->getMetaData('icon', true)); ?>"></i>
                                                        <?php endif; ?> <?php echo BaseHelper::clean($category->name); ?>

                                                    </a>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="more_categories"><span class="icon"></span> <span class="heading-sm-1"><?php echo e(__('Show more...')); ?></span></div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-7">
                        <div class="home-slide-cover mt-30">
                            <div class="hero-slider-1 style-5 dot-style-1 dot-style-1-position-2">
                                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($slider->link && !($shortcode->show_newsletter_form == 'yes' && is_plugin_active('newsletter'))): ?>
                                        <a href="<?php echo e(url($slider->link)); ?>">
                                    <?php endif; ?>

                                    <?php
                                        $tabletImage = $slider->getMetaData('tablet_image', true) ?: $slider->image;
                                        $mobileImage = $slider->getMetaData('mobile_image', true) ?: $tabletImage;
                                    ?>

                                    <div class="single-hero-slider single-animation-wrap" style="<?php if(!$loop->first): ?> display: none; <?php endif; ?>"
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
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <?php if(is_plugin_active('ads')): ?>
                                <?php $__currentLoopData = get_ads_keys_from_shortcode($shortcode); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-6 col-lg-12">
                                        <?php echo display_ad($key, 'banner-' . ($loop->index + 1)); ?>

                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End hero slider-->
    <?php else: ?>
        <section class="home-slider position-relative mb-30">
            <div class="home-slide-cover">
                <?php echo Theme::partial('shortcodes.sliders.grid', compact('sliders', 'shortcode') + ['class' => 'style-4', 'itemClass' => 'rectangle']); ?>

            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/partials/shortcodes/sliders/main.blade.php ENDPATH**/ ?>