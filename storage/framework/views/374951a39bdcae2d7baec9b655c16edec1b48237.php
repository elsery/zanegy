<?php if($paginator->hasPages()): ?>
    <div class="pagination-area mt-20 mb-20 pagination-page">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-start">
                
                <?php if(!$paginator->onFirstPage()): ?>
                    <li class="page-item">
                        <a class="prev page-link" href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev"><i class="fi-rs-arrow-small-left"></i></a>
                    </li>
                <?php endif; ?>

                
                <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <?php if(is_string($element)): ?>
                        <li class="page-item">
                            <span class="page-link"><?php echo e($element); ?></span>
                        </li>
                    <?php endif; ?>

                    
                    <?php if(is_array($element)): ?>
                        <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($page == $paginator->currentPage()): ?>
                                <li class="page-item active"><span class="page-link"><?php echo e($page); ?></span></li>
                            <?php else: ?>
                                <li class="page-item"><a class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                
                <?php if($paginator->hasMorePages()): ?>
                    <li class="page-item"><a class="next page-link" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next"><i class="fi-rs-arrow-small-right"></i></a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/partials/custom-pagination.blade.php ENDPATH**/ ?>