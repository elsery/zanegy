<?php if(!empty($big)): ?>
    <div class="page-header mt-30 mb-75">
        <div class="container">
            <div class="archive-header" <?php if(!empty($background)): ?> style="background-image: url(<?php echo e(RvMedia::getImageUrl($background)); ?>)" <?php endif; ?>>
                <div class="row align-items-center">
                    <div class="col-xl-3">
                        <h1 class="mb-15"><?php echo e(SeoHelper::getTitle()); ?></h1>
                        <div class="breadcrumb">
                            <?php $__currentLoopData = $crumbs = Theme::breadcrumb()->getCrumbs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $crumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($i != (count($crumbs) - 1)): ?>
                                    <div class="breadcrumb-item d-inline-block">
                                        <a href="<?php echo e($crumb['url']); ?>" title="<?php echo e($crumb['label']); ?>">
                                            <?php echo BaseHelper::clean($crumb['label']); ?>

                                        </a>
                                    </div>
                                    <span></span>
                                <?php else: ?>
                                    <div class="breadcrumb-item d-inline-block active">
                                        <div itemprop="item">
                                            <?php echo BaseHelper::clean($crumb['label']); ?>

                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <?php $__currentLoopData = $crumbs = Theme::breadcrumb()->getCrumbs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $crumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($i != (count($crumbs) - 1)): ?>
                        <div class="breadcrumb-item d-inline-block">
                            <a href="<?php echo e($crumb['url']); ?>"title="<?php echo e($crumb['label']); ?>">
                                <?php echo BaseHelper::clean($crumb['label']); ?>

                            </a>
                        </div>
                        <span></span>
                    <?php else: ?>
                        <div class="breadcrumb-item d-inline-block active">
                            <div itemprop="item">
                                <?php echo BaseHelper::clean($crumb['label']); ?>

                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/partials/breadcrumb.blade.php ENDPATH**/ ?>