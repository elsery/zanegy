<div class="footer-mobile">
    <ul class="menu--footer">
        <li>
            <a href="<?php echo e(route('public.index')); ?>">
                <i class="fi-rs-home"></i>
                <span><?php echo e(__('Home')); ?></span>
            </a>
        </li>
        <?php if(is_plugin_active('ecommerce')): ?>
            <li>
                <a class="toggle--sidebar" href="<?php echo e(route('public.products')); ?>">
                    <i class="fi-rs-apps"></i>
                    <span><?php echo e(__('Shop')); ?></span>
                </a>
            </li>
            <?php if(EcommerceHelper::isCartEnabled()): ?>
                <li>
                    <a class="toggle--sidebar" href="<?php echo e(route('public.cart')); ?>">
                        <i class="fi-rs-shopping-cart mini-cart-icon">
                            <span class="cart-counter"><?php echo e(Cart::instance('cart')->count()); ?></span>
                        </i>
                        <span><?php echo e(__('Cart')); ?></span>
                    </a>
                </li>
            <?php endif; ?>
            <li>
                <a href="#" class="trigger-mobile-menu">
                    <i class="fi-rs-search"></i>
                    <span><?php echo e(__('Search')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('customer.overview')); ?>">
                    <i class="fi-rs-user"></i>
                    <span><?php echo e(__('Account')); ?></span>
                </a>
            </li>
        <?php endif; ?>
    </ul>
</div>
<?php /**PATH C:\xampp\htdocs\work.com\platform/plugins/bottom-bar-menu/resources/views/menu.blade.php ENDPATH**/ ?>