<?php if($productAttributeSets->count() > 0): ?>
    <div class="add-new-product-attribute-wrap">
        <input type="hidden" name="is_added_attributes" id="is_added_attributes" value="0">
        <a href="#" class="btn-trigger-add-attribute"
            data-toggle-text="<?php echo e(trans('plugins/ecommerce::products.form.cancel')); ?>"><?php echo e(trans('plugins/ecommerce::products.form.add_new_attributes')); ?></a>
        <p><?php echo e(trans('plugins/ecommerce::products.form.add_new_attributes_description')); ?></p>
        <div class="list-product-attribute-values-wrap hidden">
            <div class="product-select-attribute-item-template">

            </div>
        </div>
        <div class="list-product-attribute-wrap hidden">
            <div class="list-product-attribute-items-wrap">

            </div>

            <div>
                <a href="#" class="btn btn-secondary btn-trigger-add-attribute-item <?php if($productAttributeSets->count() < 2): ?> hidden <?php endif; ?>"><?php echo e(trans('plugins/ecommerce::products.form.add_more_attribute')); ?></a>
                <?php if(! empty($addAttributeToProductUrl)): ?>
                    <a href="#" class="btn btn-info btn-trigger-add-attribute-to-simple-product"
                        data-target="<?php echo e($addAttributeToProductUrl); ?>"
                        data-bs-toggle="tooltip"
                        title="<?php echo e(trans('plugins/ecommerce::products.this_action_will_reload_page')); ?>"><?php echo e(trans('plugins/ecommerce::products.form.continue')); ?></a>
                <?php endif; ?>
            </div>
            <?php if($product && is_object($product) && $product->id): ?>
                <div class="alert alert-warning mt-2">
                    <span><?php echo e(trans('plugins/ecommerce::products.this_action_will_reload_page')); ?></span>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php elseif(is_in_admin(true) && Auth::check() && Auth::user()->hasPermission('product-attribute-sets.create')): ?>
    <p><?php echo trans('plugins/ecommerce::products.form.create_product_variations', [
        'link' => Html::link(route('product-attribute-sets.create'), trans('plugins/ecommerce::products.form.add_new_attributes'))
    ]); ?></p>
<?php endif; ?>

<script type="text/x-custom-template" id="attribute_item_wrap_template">
    <div class="product-attribute-set-item" id="__id__">
        <div class="row">
            <div class="col-md-4 col-sm-5">
                <div class="form-group mb-3">
                    <label class="text-title-field"><?php echo e(trans('plugins/ecommerce::products.form.attribute_name')); ?></label>
                    <select class="next-input product-select-attribute-item"></select>
                </div>
            </div>
            <div class="col-md-4 col-sm-5">
                <div class="form-group mb-3">
                    <label class="text-title-field"><?php echo e(trans('plugins/ecommerce::products.form.value')); ?></label>
                    <div class="product-select-attribute-item-value-wrap">
                        <div class="product-select-attribute-item-wrap-template">
                            <select class="next-input product-select-attribute-item-value"></select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-2 product-set-item-delete-action hidden">
                <div class="form-group mb-3">
                    <label class="text-title-field">&nbsp;</label>
                    <div>
                        <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</script>
<?php /**PATH C:\xampp\htdocs\work.com\platform/plugins/ecommerce/resources/views/products/partials/add-product-attributes.blade.php ENDPATH**/ ?>