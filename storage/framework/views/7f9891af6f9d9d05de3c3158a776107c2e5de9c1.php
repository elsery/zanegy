<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="bs-callout bs-callout-primary">
                <p><?php echo e(trans('core/base::system.report_description')); ?>:</p>
                <button id="btn-report" class="btn btn-info btn-sm"><?php echo e(trans('core/base::system.get_system_report')); ?></button>

                <div id="report-wrapper">
                    <textarea name="txt-report" id="txt-report" class="col-sm-12" rows="10" spellcheck="false" onfocus="this.select()">
                        ### <?php echo e(trans('core/base::system.system_environment')); ?>


                        - <?php echo e(trans('core/base::system.cms_version')); ?>: <?php echo e(get_cms_version()); ?>

                        - <?php echo e(trans('core/base::system.framework_version')); ?>: <?php echo e($systemEnv['version']); ?>

                        - <?php echo e(trans('core/base::system.timezone')); ?>: <?php echo e($systemEnv['timezone']); ?>

                        - <?php echo e(trans('core/base::system.debug_mode_off')); ?>: <?php echo ! $systemEnv['debug_mode'] ? '&#10004;' : '&#10008;'; ?>

                        - <?php echo e(trans('core/base::system.storage_dir_writable')); ?>: <?php echo $systemEnv['storage_dir_writable'] ? '&#10004;' : '&#10008;'; ?>

                        - <?php echo e(trans('core/base::system.cache_dir_writable')); ?>: <?php echo $systemEnv['cache_dir_writable'] ? '&#10004;' : '&#10008;'; ?>

                        - <?php echo e(trans('core/base::system.app_size')); ?>: <?php echo e($systemEnv['app_size']); ?>


                        ### <?php echo e(trans('core/base::system.server_environment')); ?>


                        - <?php echo e(trans('core/base::system.php_version')); ?>: <?php echo e($serverEnv['version'] . (!$matchPHPRequirement ? '(' . trans('core/base::system.php_version_error', ['version' => $requiredPhpVersion]) . ')' : '')); ?>

                        - <?php echo e(trans('core/base::system.memory_limit')); ?>: <?php echo $serverEnv['memory_limit'] ?: '&mdash;'; ?>

                        - <?php echo e(trans('core/base::system.max_execution_time')); ?>: <?php echo $serverEnv['max_execution_time'] ?: '&mdash;'; ?>

                        - <?php echo e(trans('core/base::system.server_software')); ?>: <?php echo e($serverEnv['server_software']); ?>

                        - <?php echo e(trans('core/base::system.server_os')); ?>: <?php echo e($serverEnv['server_os']); ?>

                        - <?php echo e(trans('core/base::system.database')); ?>: <?php echo e($serverEnv['database_connection_name']); ?>

                        - <?php echo e(trans('core/base::system.ssl_installed')); ?>: <?php echo $serverEnv['ssl_installed'] ? '&#10004;' : '&#10008;'; ?>

                        - <?php echo e(trans('core/base::system.cache_driver')); ?>: <?php echo e($serverEnv['cache_driver']); ?>

                        - <?php echo e(trans('core/base::system.queue_connection')); ?>: <?php echo e($serverEnv['queue_connection']); ?>

                        - <?php echo e(trans('core/base::system.session_driver')); ?>: <?php echo e($serverEnv['session_driver']); ?>

                        - <?php echo e(trans('core/base::system.allow_url_fopen_enabled')); ?>: <?php echo $serverEnv['allow_url_fopen_enabled'] ? '&#10004;' : '&#10008;'; ?>

                        - <?php echo e(trans('core/base::system.mbstring_ext')); ?>: <?php echo $serverEnv['mbstring'] ? '&#10004;' : '&#10008;'; ?>

                        - <?php echo e(trans('core/base::system.openssl_ext')); ?>: <?php echo $serverEnv['openssl'] ? '&#10004;' : '&#10008;'; ?>

                        - <?php echo e(trans('core/base::system.pdo_ext')); ?>: <?php echo $serverEnv['pdo'] ? '&#10004;' : '&#10008;'; ?>

                        - <?php echo e(trans('core/base::system.curl_ext')); ?>: <?php echo $serverEnv['curl'] ? '&#10004;' : '&#10008;'; ?>

                        - <?php echo e(trans('core/base::system.exif_ext')); ?>: <?php echo $serverEnv['exif'] ? '&#10004;' : '&#10008;'; ?>

                        - <?php echo e(trans('core/base::system.file_info_ext')); ?>: <?php echo $serverEnv['fileinfo'] ? '&#10004;' : '&#10008;'; ?>

                        - <?php echo e(trans('core/base::system.tokenizer_ext')); ?>: <?php echo $serverEnv['tokenizer']  ? '&#10004;' : '&#10008;'; ?>

                        - <?php echo e(trans('core/base::system.imagick_or_gd_ext')); ?>: <?php echo $serverEnv['imagick_or_gd']  ? '&#10004;' : '&#10008;'; ?>

                        - <?php echo e(trans('core/base::system.zip')); ?>: <?php echo $serverEnv['zip']  ? '&#10004;' : '&#10008;'; ?>

                        - <?php echo e(trans('core/base::system.iconv')); ?>: <?php echo $serverEnv['iconv']  ? '&#10004;' : '&#10008;'; ?>


                        ### <?php echo e(trans('core/base::system.installed_packages')); ?>


                        <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            - <?php echo e($package['name']); ?> : <?php echo e($package['version']); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </textarea>
                    <button id="copy-report" class="btn btn-info btn-sm"><?php echo e(trans('core/base::system.copy_report')); ?></button>
                </div>
            </div>
        </div>
    </div>

    <div class="row"> <!-- Main Row -->

        <div class="col-sm-8"> <!-- Package & Dependency column -->
            <div class="widget meta-boxes">
                <div class="widget-title">
                    <h4>
                        <span><?php echo e(trans('core/base::system.installed_packages')); ?></span>
                    </h4>
                </div>
                <div class="widget-body">
                    <?php echo $infoTable->renderTable(); ?>

                </div>
            </div>
        </div> <!-- / Package & Dependency column -->

        <div class="col-sm-4"> <!-- Server Environment column -->
            <div class="widget meta-boxes">
                <div class="widget-title">
                    <h4>
                        <span><?php echo e(trans('core/base::system.system_environment')); ?></span>
                    </h4>
                </div>

                <ul class="list-group">
                    <li class="list-group-item"><?php echo e(trans('core/base::system.cms_version')); ?>: <?php echo e(get_cms_version()); ?></li>
                    <li class="list-group-item"><?php echo e(trans('core/base::system.framework_version')); ?>: <?php echo e($systemEnv['version']); ?></li>
                    <li class="list-group-item"><?php echo e(trans('core/base::system.timezone')); ?>: <?php echo e($systemEnv['timezone']); ?></li>
                    <li class="list-group-item"><?php echo e(trans('core/base::system.debug_mode_off')); ?>: <?php echo ! $systemEnv['debug_mode'] ? '<span class="fas fa-check"></span>' : '<span class="fas fa-times"></span>'; ?></li>
                    <li class="list-group-item"><?php echo e(trans('core/base::system.storage_dir_writable')); ?>: <?php echo $systemEnv['storage_dir_writable'] ? '<span class="fas fa-check"></span>' : '<span class="fas fa-times"></span>'; ?></li>
                    <li class="list-group-item"><?php echo e(trans('core/base::system.cache_dir_writable')); ?>: <?php echo $systemEnv['cache_dir_writable'] ? '<span class="fas fa-check"></span>' : '<span class="fas fa-times"></span>'; ?></li>
                    <li class="list-group-item"><?php echo e(trans('core/base::system.app_size')); ?>: <?php echo e($systemEnv['app_size']); ?></li>
                </ul>
            </div>

            <div class="widget meta-boxes">
                <div class="widget-title">
                    <h4>
                        <span><?php echo e(trans('core/base::system.server_environment')); ?></span>
                    </h4>
                </div>

                <ul class="list-group">
                    <li class="list-group-item"><?php echo e(trans('core/base::system.php_version')); ?>: <?php echo e($serverEnv['version']); ?> <?php if($matchPHPRequirement): ?> <span class="fas fa-check"></span> <?php else: ?> <span class="fas fa-times"></span> <span class="text-danger">(<?php echo e(trans('core/base::system.php_version_error', ['version' => $requiredPhpVersion])); ?>)</span> <?php endif; ?></li>
                    <li class="list-group-item"><?php echo e(trans('core/base::system.memory_limit')); ?>: <?php echo $serverEnv['memory_limit'] ?: '&mdash;'; ?></li>
                    <li class="list-group-item"><?php echo e(trans('core/base::system.max_execution_time')); ?>: <?php echo $serverEnv['max_execution_time'] ?: '&mdash;'; ?></li>
                    <li class="list-group-item"><?php echo e(trans('core/base::system.server_software')); ?>: <?php echo e($serverEnv['server_software']); ?></li>
                    <li class="list-group-item"><?php echo e(trans('core/base::system.server_os')); ?>: <?php echo e($serverEnv['server_os']); ?></li>
                    <li class="list-group-item"><?php echo e(trans('core/base::system.database')); ?>: <?php echo e($serverEnv['database_connection_name']); ?></li>
                    <li class="list-group-item"><?php echo e(trans('core/base::system.ssl_installed')); ?>: <?php echo $serverEnv['ssl_installed'] ? '<span class="fas fa-check"></span>' : '<span class="fas fa-times"></span>'; ?></li>
                    <li class="list-group-item"><?php echo e(trans('core/base::system.cache_driver')); ?>: <?php echo e($serverEnv['cache_driver']); ?></li>
                    <li class="list-group-item"><?php echo e(trans('core/base::system.session_driver')); ?>: <?php echo e($serverEnv['session_driver']); ?></li>
                    <li class="list-group-item"><?php echo e(trans('core/base::system.queue_connection')); ?>: <?php echo e($serverEnv['queue_connection']); ?></li>
                    <li class="list-group-item"><?php echo e(trans('core/base::system.allow_url_fopen_enabled')); ?>: <?php echo $serverEnv['allow_url_fopen_enabled'] ? '<span class="fas fa-check"></span>' : '<span class="fas fa-times"></span>'; ?></li>
                    <li class="list-group-item"><?php echo e(trans('core/base::system.openssl_ext')); ?>: <?php echo $serverEnv['openssl'] ? '<span class="fas fa-check"></span>' : '<span class="fas fa-times"></span>'; ?></li>
                    <li class="list-group-item"><?php echo e(trans('core/base::system.mbstring_ext')); ?>: <?php echo $serverEnv['mbstring'] ? '<span class="fas fa-check"></span>' : '<span class="fas fa-times"></span>'; ?></li>
                    <li class="list-group-item"><?php echo e(trans('core/base::system.pdo_ext')); ?>: <?php echo $serverEnv['pdo'] ? '<span class="fas fa-check"></span>' : '<span class="fas fa-times"></span>'; ?></li>
                    <li class="list-group-item"><?php echo e(trans('core/base::system.curl_ext')); ?>: <?php echo $serverEnv['curl'] ? '<span class="fas fa-check"></span>' : '<span class="fas fa-times"></span>'; ?></li>
                    <li class="list-group-item"><?php echo e(trans('core/base::system.exif_ext')); ?>: <?php echo $serverEnv['exif'] ? '<span class="fas fa-check"></span>' : '<span class="fas fa-times"></span>'; ?></li>
                    <li class="list-group-item"><?php echo e(trans('core/base::system.file_info_ext')); ?>: <?php echo $serverEnv['fileinfo'] ? '<span class="fas fa-check"></span>' : '<span class="fas fa-times"></span>'; ?></li>
                    <li class="list-group-item"><?php echo e(trans('core/base::system.tokenizer_ext')); ?>: <?php echo $serverEnv['tokenizer']  ? '<span class="fas fa-check"></span>' : '<span class="fas fa-times"></span>'; ?></li>
                    <li class="list-group-item"><?php echo e(trans('core/base::system.imagick_or_gd_ext')); ?>: <?php echo $serverEnv['imagick_or_gd']  ? '<span class="fas fa-check"></span>' : '<span class="fas fa-times"></span>'; ?></li>
                    <li class="list-group-item"><?php echo e(trans('core/base::system.zip')); ?>: <?php echo $serverEnv['zip']  ? '<span class="fas fa-check"></span>' : '<span class="fas fa-times"></span>'; ?></li>
                    <li class="list-group-item"><?php echo e(trans('core/base::system.iconv')); ?>: <?php echo $serverEnv['zip']  ? '<span class="fas fa-check"></span>' : '<span class="fas fa-times"></span>'; ?></li>
                </ul>
            </div>
        </div> <!-- / Server Environment column -->

    </div> <!-- / Main Row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make(BaseHelper::getAdminMasterLayoutTemplate(), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\work.com\platform/core/base/resources/views/system/info.blade.php ENDPATH**/ ?>