<section class="product-tabs section-padding position-relative">
    <popular-products url="<?php echo e(route('public.ajax.popular-products', ['limit' => $shortcode->limit])); ?>" :per-row="<?php echo e((int)$shortcode->per_row > 0 ? (int)$shortcode->per_row : 4); ?>" title="<?php echo BaseHelper::clean($shortcode->title); ?>"></popular-products>
</section>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/partials/shortcodes/ecommerce/popular-products.blade.php ENDPATH**/ ?>