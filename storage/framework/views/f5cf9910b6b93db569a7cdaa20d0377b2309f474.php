<div id="<?php echo e($box['id']); ?>" class="widget meta-boxes">
     <div class="widget-title">
          <h4><span><?php echo BaseHelper::clean($box['title']); ?></span></h4>
     </div>
     <div class="widget-body">
          <?php echo $callback; ?>

     </div>
</div>
<?php /**PATH C:\xampp\htdocs\work.com\platform/core/base/resources/views/elements/meta-box-wrap.blade.php ENDPATH**/ ?>