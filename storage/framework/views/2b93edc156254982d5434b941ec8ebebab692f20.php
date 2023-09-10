<?php echo Theme::partial('header'); ?>


<?php
    $layoutData = Theme::get('layout-data') ?: [];
?>
<main class="main <?php echo e(Arr::get($layoutData, 'main-class', '')); ?>" id="main-section">
    <?php if(Theme::get('hasBreadcrumb', true)): ?>
        <?php echo Theme::partial('breadcrumb'); ?>

    <?php endif; ?>

    <?php if(Arr::get($layoutData, 'is-wrap-container', false)): ?>
        <div class="page-content <?php echo e(Arr::get($layoutData, 'wrap-container-class', '')); ?>">
    <?php endif; ?>
        <div class="container">
            <?php echo Theme::content(); ?>

        </div>
    <?php if(Arr::get($layoutData, 'is-wrap-container', false)): ?>
        </div>
    <?php endif; ?>
</main>

<?php echo Theme::partial('footer'); ?>

<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/layouts/default.blade.php ENDPATH**/ ?>