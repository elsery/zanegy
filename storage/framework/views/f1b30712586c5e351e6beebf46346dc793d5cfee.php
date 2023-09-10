<section class="popular-categories section-padding">
    <featured-product-categories-component url="<?php echo e(route('public.ajax.featured-product-categories')); ?>" :scroll-items="<?php echo e((int)$shortcode->scroll_items > 0 ? (int)$shortcode->scroll_items : 10); ?>" :title="'<?php echo BaseHelper::clean($shortcode->title); ?>'"></featured-product-categories-component>
</section>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/partials/shortcodes/ecommerce/featured-product-categories.blade.php ENDPATH**/ ?>