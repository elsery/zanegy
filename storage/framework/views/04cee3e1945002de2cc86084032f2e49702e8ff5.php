<?php
    $page->loadMissing('metadata');

    Theme::set('page', $page);
?>

<?php if($page->template == 'default'): ?>
    <section class="mt-60 mb-60">
         <?php echo apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, Html::tag('div', BaseHelper::clean($page->content), ['class' => 
'ck-content'])->toHtml(), $page); ?>

    </section>
<?php else: ?>
    <?php echo apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, Html::tag('div', BaseHelper::clean($page->content), ['class' => 'ck-content'])->toHtml(), 
$page); ?>

<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/views/page.blade.php ENDPATH**/ ?>