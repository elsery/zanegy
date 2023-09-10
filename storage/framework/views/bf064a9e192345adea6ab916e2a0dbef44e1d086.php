<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'title' => null,
    'description' => null,
    'preFooter' => null,
    'extraDescription' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'title' => null,
    'description' => null,
    'preFooter' => null,
    'extraDescription' => null,
]); ?>
<?php foreach (array_filter(([
    'title' => null,
    'description' => null,
    'preFooter' => null,
    'extraDescription' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="flexbox-annotated-section">
    <div class="flexbox-annotated-section-annotation">
        <?php if($title): ?>
            <div class="annotated-section-title pd-all-20">
                <h2><?php echo $title; ?></h2>
            </div>
        <?php endif; ?>
        <?php if($description): ?>
            <div class="annotated-section-description pd-all-20 p-none-t">
                <p class="color-note"><?php echo $description; ?></p>
            </div>
        <?php endif; ?>

        <?php echo $extraDescription ?: null; ?>

    </div>

    <div class="flexbox-annotated-section-content">
        <div class="wrapper-content pd-all-20">
            <?php echo e($slot); ?>

        </div>

        <?php echo $preFooter ?: null; ?>

    </div>
</div>
<?php /**PATH C:\xampp\htdocs\work.com\platform/core/setting/resources/views/components/section.blade.php ENDPATH**/ ?>