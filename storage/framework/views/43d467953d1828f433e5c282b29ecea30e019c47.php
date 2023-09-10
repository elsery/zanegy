<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <?php echo BaseHelper::googleFonts('https://fonts.googleapis.com/css2?family=' . urlencode(theme_option('font_text', 'Lato')) . ':ital,wght@0,400;0,700;1,400;1,700&family=' . urlencode(theme_option('font_heading', 'Quicksand')) . ':wght@400;500;600;700&display=swap'); ?>


    <style>
        :root {
            --font-text: <?php echo e(theme_option('font_text', 'Lato')); ?>, sans-serif;
            --font-heading: <?php echo e(theme_option('font_heading', 'Quicksand')); ?>, sans-serif;
            --color-brand: <?php echo e(theme_option('color_brand', '#3BB77E')); ?>;
            --color-brand-rgb: <?php echo e(implode(',', BaseHelper::hexToRgb(theme_option('color_brand', '#3BB77E')))); ?>;
            --color-brand-dark: <?php echo e(theme_option('color_brand_dark', '#29A56C')); ?>;
            --color-brand-2: <?php echo e(theme_option('color_brand_2', '#FDC040')); ?>;
            --color-primary: <?php echo e(theme_option('color_primary', '#5a97fa')); ?>;
            --color-secondary: <?php echo e(theme_option('color_secondary', '#3e5379')); ?>;
            --color-warning: <?php echo e(theme_option('color_warning', '#ff9900')); ?>;
            --color-danger: <?php echo e(theme_option('color_danger', '#FD6E6E')); ?>;
            --color-success: <?php echo e(theme_option('color_success', '#81B13D')); ?>;
            --color-info: <?php echo e(theme_option('color_info', '#2cc1d8')); ?>;
            --color-text: <?php echo e(theme_option('color_text', '#7E7E7E')); ?>;
            --color-heading: <?php echo e(theme_option('color_heading', '#253D4E')); ?>;
            --color-grey-1: <?php echo e(theme_option('color_grey_1', '#253D4E')); ?>;
            --color-grey-2: <?php echo e(theme_option('color_grey_2', '#242424')); ?>;
            --color-grey-4: <?php echo e(theme_option('color_grey_4', '#adadad')); ?>;
            --color-grey-9: <?php echo e(theme_option('color_grey_9', '#f4f5f9')); ?>;
            --color-muted: <?php echo e(theme_option('color_muted', '#B6B6B6')); ?>;
            --color-body: <?php echo e(theme_option('color_body', '#7E7E7E')); ?>;
        }
    </style>

    <?php
        Theme::asset()->remove('language-css');
        Theme::asset()->container('footer')->remove('language-public-js');
        Theme::asset()->container('footer')->remove('simple-slider-owl-carousel-css');
        Theme::asset()->container('footer')->remove('simple-slider-owl-carousel-js');
        Theme::asset()->container('footer')->remove('simple-slider-css');
        Theme::asset()->container('footer')->remove('simple-slider-js');
    ?>

    <?php echo Theme::header(); ?>


    <?php
        $headerStyle = theme_option('header_style') ?: '';
        $page = Theme::get('page');
        if ($page) {
            $headerStyle = $page->getMetaData('header_style', true) ?: $headerStyle;
        }
        $headerStyle = ($headerStyle && in_array($headerStyle, array_keys(get_layout_header_styles()))) ? $headerStyle : '';
    ?>
</head>
<body <?php if(BaseHelper::siteLanguageDirection() == 'rtl'): ?> dir="rtl" <?php endif; ?> <?php if(Theme::get('bodyClass')): ?> class="<?php echo e(Theme::get('bodyClass')); ?>" <?php endif; ?>>
    <?php echo apply_filters(THEME_FRONT_BODY, null); ?>

    <div id="alert-container"></div>

    <?php echo Theme::partial('preloader'); ?>


<header class="header-area header-style-1 header-height-2 <?php echo e($headerStyle); ?>">
<?php if(theme_option('mobile-header-message')): ?>
    <div class="mobile-promotion">
        <?php echo BaseHelper::clean(theme_option('mobile-header-message')); ?>

    </div>
<?php endif; ?>
<div class="header-top header-top-ptb-1 d-none d-lg-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-3 col-lg-6">
                <div class="header-info">
                    <?php echo Menu::renderMenuLocation('header-navigation', [
                            'view' => 'header-menu',
                        ]); ?>

                </div>
            </div>
            <div class="col-xl-5 d-none d-xl-block">
                <div class="text-center">
                    <?php if(theme_option('header_messages') && theme_option('header_messages') != '[]'): ?>
                        <div id="news-flash" class="d-inline-block">
                            <ul>
                                <?php $__currentLoopData = json_decode(theme_option('header_messages'), true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $headerMessage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(count($headerMessage) == 4): ?>
                                        <li <?php if(!$loop->first): ?> style="display: none" <?php endif; ?>>
                                            <?php if($headerMessage[0]['value']): ?>
                                                <i class="<?php echo e($headerMessage[0]['value']); ?> d-inline-block mr-5"></i>&nbsp;
                                            <?php endif; ?>

                                            <?php if($headerMessage[1]['value']): ?>
                                                <span class="d-inline-block">
                                                    <?php echo BaseHelper::clean($headerMessage[1]['value']); ?>

                                                </span>
                                            <?php endif; ?>
                                            <?php if($headerMessage[2]['value'] && $headerMessage[3]['value']): ?>
                                                <a class="active d-inline-block" href="<?php echo e(url($headerMessage[2]['value'])); ?>">&nbsp;<?php echo BaseHelper::clean($headerMessage[3]['value']); ?></a>
                                            <?php endif; ?>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php $currencies = is_plugin_active('ecommerce') ? get_all_currencies() : []; ?>
            <div class="col-xl-4 col-lg-6">
                <div class="header-info header-info-right">
                    <ul>
                        <?php if(theme_option('hotline')): ?>
                            <li><?php echo e(__('Need help? Call Us:')); ?> &nbsp;<strong class="text-brand"> <?php echo e(theme_option('hotline')); ?></strong></li>
                        <?php endif; ?>

                        <?php if(is_plugin_active('language')): ?>
                            <?php echo Theme::partial('language-switcher'); ?>

                        <?php endif; ?>

                        <?php if(count($currencies) > 1): ?>
                            <li>
                                <a class="language-dropdown-active" href="#"><?php echo e(get_application_currency()->title); ?> <i class="fi-rs-angle-small-down"></i></a>
                                <ul class="language-dropdown">
                                    <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="<?php echo e(route('public.change-currency', $currency->title)); ?>"><?php echo e($currency->title); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header-middle header-middle-ptb-1 d-none d-lg-block">
    <div class="container">
        <div class="header-wrap">
            <?php if(theme_option('logo')): ?>
                <div class="logo logo-width-1">
                    <a href="<?php echo e(route('public.index')); ?>"><img src="<?php echo e(RvMedia::getImageUrl(theme_option('logo'))); ?>" alt="<?php echo e(theme_option('site_title')); ?>"></a>
                </div>
            <?php endif; ?>

            <div class="header-right">
                <?php if(is_plugin_active('ecommerce')): ?>
                    <div class="search-style-2">
                        <form action="<?php echo e(route('public.products')); ?>" class="form--quick-search" data-ajax-url="<?php echo e(route('public.ajax.search-products')); ?>" method="GET">
                            <div class="form-group--icon position-relative">
                                <div class="product-cat-label"><?php echo e(__('All Categories')); ?></div>
                                <select class="product-category-select" name="categories[]">
                                    <option value=""><?php echo e(__('All Categories')); ?></option>
                                    <?php echo Theme::partial('product-categories-select', ['categories' => $categories, 'indent' => null]); ?>

                                </select>
                            </div>
                            <input type="text" class="input-search-product" name="q" placeholder="<?php echo e(__('Search for items...')); ?>" value="<?php echo e(BaseHelper::stringify(request()->input('q'))); ?>" autocomplete="off">
                            <div class="panel--search-result"></div>
                        </form>
                    </div>
                    <div class="header-action-right">
                        <div class="header-action-2">
                            <?php if(EcommerceHelper::isCompareEnabled()): ?>
                                <div class="header-action-icon-2">
                                    <a href="<?php echo e(route('public.compare')); ?>">
                                        <img class="svgInject" alt="<?php echo e(__('Compare')); ?>" src="<?php echo e(Theme::asset()->url('imgs/theme/icons/icon-compare.svg')); ?>" />
                                        <span class="pro-count blue compare-count"><?php echo e(Cart::instance('compare')->count()); ?></span>
                                    </a>
                                    <a href="<?php echo e(route('public.compare')); ?>"><span class="lable"><?php echo e(__('Compare')); ?></span></a>
                                </div>
                            <?php endif; ?>
                            <?php if(EcommerceHelper::isWishlistEnabled()): ?>
                                <div class="header-action-icon-2">
                                    <a href="<?php echo e(route('public.wishlist')); ?>">
                                        <img class="svgInject" alt="<?php echo e(__('Wishlist')); ?>" src="<?php echo e(Theme::asset()->url('imgs/theme/icons/icon-heart.svg')); ?>" />
                                        <span class="pro-count blue wishlist-count"><?php if(auth('customer')->check()): ?> <?php echo e(auth('customer')->user()->wishlist()->count()); ?> <?php else: ?> <?php echo e(Cart::instance('wishlist')->count()); ?> <?php endif; ?></span>
                                    </a>
                                    <a href="<?php echo e(route('public.wishlist')); ?>"><span class="lable"><?php echo e(__('Wishlist')); ?></span></a>
                                </div>
                            <?php endif; ?>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="<?php echo e(route('public.cart')); ?>">
                                    <img alt="<?php echo e(__('Cart')); ?>" src="<?php echo e(Theme::asset()->url('imgs/theme/icons/icon-cart.svg')); ?>" />
                                    <span class="pro-count blue"><?php echo e(Cart::instance('cart')->count()); ?></span>
                                </a>
                                <a href="<?php echo e(route('public.cart')); ?>"><span class="lable"><?php echo e(__('Cart')); ?></span></a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2 cart-dropdown-panel">
                                    <?php echo Theme::partial('cart-panel'); ?>

                                </div>
                            </div>
                            <div class="header-action-icon-2">
                                <a href="<?php echo e(route('customer.overview')); ?>">
                                    <img class="svgInject rounded-circle"
                                        alt="<?php echo e(__('Account')); ?>"
                                        src="<?php echo e(auth('customer')->check() ? auth('customer')->user()->avatar_url : Theme::asset()->url('imgs/theme/icons/icon-user.svg')); ?>" />
                                </a>
                                <a href="<?php echo e(route('customer.overview')); ?>" class="header-customer-name"><span class="lable ml-0"><?php echo e(auth('customer')->check() ? Str::limit(auth('customer')->user()->name, 10) : __('Account')); ?></span></a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                    <ul>
                                        <?php if(auth('customer')->check()): ?>
                                            <li><a href="<?php echo e(route('customer.overview')); ?>"><i class="fi fi-rs-user mr-10"></i><?php echo e(__('My Account')); ?></a></li>
                                            <?php if(EcommerceHelper::isOrderTrackingEnabled()): ?>
                                                <li><a href="<?php echo e(route('public.orders.tracking')); ?>"><i class="fi fi-rs-location-alt mr-10"></i><?php echo e(__('Order Tracking')); ?></a></li>
                                            <?php endif; ?>
                                            <?php if(EcommerceHelper::isWishlistEnabled()): ?>
                                                <li><a href="<?php echo e(route('public.wishlist')); ?>"><i class="fi fi-rs-heart mr-10"></i><?php echo e(__('My Wishlist')); ?></a></li>
                                            <?php endif; ?>
                                            <li><a href="<?php echo e(route('customer.edit-account')); ?>"><i class="fi fi-rs-settings-sliders mr-10"></i><?php echo e(__('Update profile')); ?></a></li>
                                            <li><a href="<?php echo e(route('customer.logout')); ?>"><i class="fi fi-rs-sign-out mr-10"></i><?php echo e(__('Sign out')); ?></a></li>
                                        <?php else: ?>
                                            <li><a href="<?php echo e(route('customer.login')); ?>"><i class="fi fi-rs-user mr-10"></i><?php echo e(__('Login')); ?></a></li>
                                            <li><a href="<?php echo e(route('customer.register')); ?>"><i class="fi fi-rs-user-add mr-10"></i><?php echo e(__('Register')); ?></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="header-bottom header-bottom-bg-color <?php if(theme_option('enabled_sticky_header', 'yes') == 'yes'): ?> sticky-bar <?php endif; ?>">
    <div class="container">
        <div class="header-wrap header-space-between position-relative">
            <?php if(theme_option('logo')): ?>
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="<?php echo e(route('public.index')); ?>"><img src="<?php echo e(RvMedia::getImageUrl(theme_option('logo'))); ?>" alt="<?php echo e(theme_option('site_title')); ?>"></a>
                </div>
            <?php endif; ?>
            <div class="header-nav d-none d-lg-flex">
                <?php if(theme_option('enabled_browse_categories_on_header', 'yes') == 'yes'): ?>
                    <div class="main-categories-wrap d-none d-lg-block">
                        <a class="categories-button-active" href="#">
                            <span class="fi-rs-apps"></span> <?php echo BaseHelper::clean(__('<span class="et">Browse</span> All Categories')); ?>

                            <i class="fi-rs-angle-down"></i>
                        </a>
                        <div class="categories-dropdown-wrap categories-dropdown-active-large font-heading">
                            <div class="d-flex categories-dropdown-inner">
                                <?php echo Theme::partial('product-categories-dropdown', ['categories' => $categories, 'more' => false]); ?>

                            </div>
                            <?php if(count($categories) > 10): ?>
                                <div class="more_slide_open" style="display: none">
                                    <div class="d-flex categories-dropdown-inner">
                                        <?php echo Theme::partial('product-categories-dropdown', ['categories' => $categories, 'more' => true]); ?>

                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if(count($categories) > 10): ?>
                                <div class="more_categories"><span class="icon"></span> <span class="heading-sm-1"><?php echo e(__('Show more...')); ?></span></div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                    <nav>
                        <?php echo Menu::renderMenuLocation('main-menu', [
                                'view' => 'main-menu',
                            ]); ?>

                    </nav>
                </div>
            </div>
            <?php if(theme_option('hotline')): ?>
                <div class="hotline d-none d-lg-flex">
                    <img src="<?php echo e(Theme::asset()->url('imgs/theme/icons/icon-headphone.svg')); ?>" alt="hotline" />
                    <p><?php echo e(theme_option('hotline')); ?><span><?php echo e(__('24/7 Support Center')); ?></span></p>
                </div>
            <?php endif; ?>
            <div class="header-action-icon-2 d-block d-lg-none">
                <div class="burger-icon burger-icon-white">
                    <span class="burger-icon-top"></span>
                    <span class="burger-icon-mid"></span>
                    <span class="burger-icon-bottom"></span>
                </div>
            </div>
            <?php if(is_plugin_active('ecommerce')): ?>
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">
                        <?php if(EcommerceHelper::isCompareEnabled()): ?>
                            <div class="header-action-icon-2">
                                <a href="<?php echo e(route('public.compare')); ?>">
                                    <img alt="<?php echo e(__('Compare')); ?>" src="<?php echo e(Theme::asset()->url('imgs/theme/icons/icon-compare.svg')); ?>" />
                                    <span class="pro-count white compare-count"><?php echo e(Cart::instance('compare')->count()); ?></span>
                                </a>
                            </div>
                        <?php endif; ?>
                        <?php if(EcommerceHelper::isWishlistEnabled()): ?>
                            <div class="header-action-icon-2">
                                <a href="<?php echo e(route('public.wishlist')); ?>">
                                    <img alt="<?php echo e(__('Wishlist')); ?>" src="<?php echo e(Theme::asset()->url('imgs/theme/icons/icon-heart.svg')); ?>" />
                                    <span class="pro-count white wishlist-count"><?php if(auth('customer')->check()): ?> <?php echo e(auth('customer')->user()->wishlist()->count()); ?> <?php else: ?> <?php echo e(Cart::instance('wishlist')->count()); ?> <?php endif; ?></span>
                                </a>
                            </div>
                        <?php endif; ?>
                        <?php if(EcommerceHelper::isCartEnabled()): ?>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="#">
                                    <img alt="<?php echo e(__('Cart')); ?>" src="<?php echo e(Theme::asset()->url('imgs/theme/icons/icon-cart.svg')); ?>" />
                                    <span class="pro-count white"><?php echo e(Cart::instance('cart')->count()); ?></span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2 cart-dropdown-panel">
                                    <?php echo Theme::partial('cart-panel'); ?>

                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style">
<div class="mobile-header-wrapper-inner">
    <div class="mobile-header-top">
        <?php if(theme_option('logo')): ?>
            <div class="mobile-header-logo">
                <a href="<?php echo e(route('public.index')); ?>"><img src="<?php echo e(RvMedia::getImageUrl(theme_option('logo'))); ?>" alt="<?php echo e(theme_option('site_title')); ?>"></a>
            </div>
        <?php endif; ?>
        <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
            <button class="close-style search-close">
                <i class="icon-top"></i>
                <i class="icon-bottom"></i>
            </button>
        </div>
    </div>
    <div class="mobile-header-content-area">
        <?php if(is_plugin_active('ecommerce')): ?>
            <div class="mobile-search search-style-3 mobile-header-border">
                <form action="<?php echo e(route('public.products')); ?>" class="form--quick-search" data-ajax-url="<?php echo e(route('public.ajax.search-products')); ?>" method="get">
                    <input type="text" name="q" class="input-search-product" placeholder="<?php echo e(__('Search for items...')); ?>" value="<?php echo e(BaseHelper::stringify(request()->input('q'))); ?>" autocomplete="off">
                    <button type="submit"><i class="fi-rs-search"></i></button>
                    <div class="panel--search-result"></div>
                </form>
            </div>
        <?php endif; ?>
        <div class="mobile-menu-wrap mobile-header-border">
            <!-- mobile menu start -->
            <nav>
                <?php echo Menu::renderMenuLocation('main-menu', [
                        'options' => ['class' => 'mobile-menu'],
                        'view'    => 'mobile-menu',
                    ]); ?>

            </nav>
            <!-- mobile menu end -->
        </div>

        <div class="mobile-header-info-wrap">

            <?php if(is_plugin_active('language')): ?>
                <div class="single-mobile-header-info">
                    <a class="mobile-language-active" href="#"><i class="fi-rs-globe"></i> <?php echo e(__('Language')); ?> <span><i class="fi-rs-angle-down"></i></span></a>
                    <div class="lang-curr-dropdown lang-dropdown-active">
                        <ul>
                            <?php
                                $showRelated = setting('language_show_default_item_if_current_version_not_existed', true);
                            ?>

                            <?php $__currentLoopData = Language::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e($showRelated ? Language::getLocalizedURL($localeCode) : url($localeCode)); ?>"><?php echo language_flag($properties['lang_flag'], $properties['lang_name']); ?> <?php echo e($properties['lang_name']); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(count($currencies) > 1): ?>
                <div class="single-mobile-header-info">
                    <a class="mobile-language-active" href="#"><i class="fi-rs-money"></i> <?php echo e(__('Currency')); ?> <span><i class="fi-rs-angle-down"></i></span></a>
                    <div class="lang-curr-dropdown lang-dropdown-active">
                        <ul>
                            <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(route('public.change-currency', $currency->title)); ?>"><?php echo e($currency->title); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(is_plugin_active('ecommerce')): ?>
                <div class="single-mobile-header-info">
                    <a href="<?php echo e(route('public.orders.tracking')); ?>"><i class="fi-rs-shopping-cart"></i> <?php echo e(__('Order tracking')); ?></a>
                </div>
                    <div class="single-mobile-header-info">
                        <a href="<?php echo e(route('public.compare')); ?>"><i class="fi-rs-refresh"></i> <?php echo e(__('Compare')); ?></a>
                    </div>
                <div class="single-mobile-header-info">
                    <a href="<?php echo e(route('customer.login')); ?>"><i class="fi-rs-user"></i> <?php echo e(__('Log In / Sign Up')); ?></a>
                </div>
            <?php endif; ?>
            <?php if(theme_option('hotline')): ?>
                <div class="single-mobile-header-info">
                    <a href="tel:<?php echo e(theme_option('hotline')); ?>"><i class="fi-rs-headphones"></i> <?php echo e(theme_option('hotline')); ?></a>
                </div>
            <?php endif; ?>
        </div>
        <?php if(theme_option('social_links')): ?>
            <div class="mobile-social-icon mb-50">
                <h6 class="mb-15"><?php echo e(__('Follow Us')); ?></h6>
                <?php $__currentLoopData = json_decode(theme_option('social_links'), true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socialLink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(count($socialLink) == 3): ?>
                        <a href="<?php echo e($socialLink[2]['value']); ?>"
                        title="<?php echo e($socialLink[0]['value']); ?>">
                            <img src="<?php echo e(RvMedia::getImageUrl($socialLink[1]['value'])); ?>" alt="<?php echo e($socialLink[0]['value']); ?>" />
                        </a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
        <div class="site-copyright"><?php echo e(theme_option('copyright')); ?></div>
    </div>
</div>
</div>
<!--End header-->
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/partials/header.blade.php ENDPATH**/ ?>