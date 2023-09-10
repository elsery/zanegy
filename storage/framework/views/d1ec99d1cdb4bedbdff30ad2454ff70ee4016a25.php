<div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
    <h4 class="widget-title"><?php echo e($config['name']); ?></h4>
    <ul class="footer-list mb-sm-5 mb-md-0">
        <?php echo Menu::generateMenu([
            'slug'    => $config['menu_id'],
            'options' => ['class' => 'footer-list wow fadeIn animated mb-sm-5 mb-md-0']
        ]); ?>

    </ul>
</div>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/////widgets/custom-menu/templates/frontend.blade.php ENDPATH**/ ?>