<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('plugins/log-viewer::partials.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-form">

    <?php echo $rows->render(); ?>


    <div class="table-responsive">
        <table class="table table-striped custom-table m-b-0 table-stats table-log-viewer">
            <thead>
                <tr>
                    <?php $__currentLoopData = $headers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <th class="<?php echo e($key == 'date' ? 'text-left' : 'text-center'); ?>">
                            <?php if($key == 'date'): ?>
                                <span class="label label-info"><?php echo e($header); ?></span>
                            <?php else: ?>
                                <span class="level level-<?php echo e($key); ?>">
                                    <?php echo log_styler()->icon($key) . ' ' . $header; ?>

                                </span>
                            <?php endif; ?>
                        </th>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <th class="text-center" width="120"><?php echo e(trans('plugins/log-viewer::log-viewer.actions')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php if(count($rows) > 0): ?>
                    <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <?php $__currentLoopData = $item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <td class="<?php echo e($key == 'date' ? 'text-left' : 'text-center'); ?>">
                                    <?php if($key == 'date'): ?>
                                        <span class="label label-primary"><?php echo e($value); ?></span>
                                    <?php elseif($value == 0): ?>
                                        <span class="level level-empty"><?php echo e($value); ?></span>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('log-viewer::logs.filter', [$date, $key])); ?>">
                                            <span class="level level-<?php echo e($key); ?>"><?php echo e($value); ?></span>
                                        </a>
                                    <?php endif; ?>
                                </td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <td class="text-right" style="width: 150px;">
                                <a href="<?php echo e(route('log-viewer::logs.show', [$date])); ?>" class="btn btn-xs btn-info">
                                    <i class="fa fa-search"></i>
                                </a>
                                <a href="<?php echo e(route('log-viewer::logs.download', [$date])); ?>" class="btn btn-xs btn-success">
                                    <i class="fa fa-download"></i>
                                </a>
                                <a href="#delete-log-modal" class="btn btn-xs btn-danger" data-log-date="<?php echo e($date); ?>">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="11" class="text-center"><?php echo e(trans('plugins/log-viewer::log-viewer.no_error')); ?></td>
                        </tr>
                    <?php endif; ?>
            </tbody>
        </table>
    </div>

    <?php echo $rows->render(); ?>


    <div id="delete-log-modal" class="modal fade">
        <div class="modal-dialog">
            <form id="delete-log-form" action="<?php echo e(route('log-viewer::logs.destroy')); ?>" method="post">
                <?php echo method_field('DELETE'); ?>
                <?php echo csrf_field(); ?>
                <input type="hidden" name="date">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="til_img"></i><strong><?php echo e(trans('plugins/log-viewer::log-viewer.delete_log_file')); ?></strong></h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                    </div>

                    <div class="modal-body with-padding">
                        <p><?php echo trans('plugins/log-viewer::log-viewer.confirm_delete_msg', ['date' => null]); ?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary float-start" data-bs-dismiss="modal"><?php echo e(trans('core/base::forms.cancel')); ?></button>
                        <button type="submit" class="btn btn-sm btn-danger"><?php echo e(trans('plugins/log-viewer::log-viewer.delete_button')); ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    <script>
        'use strict';
        $(function () {
            var deleteLogModal = $('div#delete-log-modal');
            var deleteLogForm = $('form#delete-log-form');
            var submitBtn = deleteLogForm.find('button[type=submit]');

            $('a[href="#delete-log-modal"]').on('click', function (event) {
                event.preventDefault();
                var date = $(this).data('log-date');
                deleteLogForm.find('input[name=date]').val(date);
                deleteLogModal.find('.modal-body p .log_date').text(date);

                deleteLogModal.modal('show');
            });

            deleteLogForm.on('submit', function (event) {
                event.preventDefault();
                submitBtn.addClass('button-loading');

                $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr('method'),
                    dataType: 'json',
                    data: $(this).serialize(),
                    success: function (data) {
                        if (data.result === 'success') {
                            deleteLogModal.modal('hide');
                            location.reload();
                        }
                        else {
                            Botble.showError('AJAX ERROR ! Check the console !');
                            console.error(data);
                        }

                        submitBtn.removeClass('button-loading');
                    },
                    error: function (xhr, textStatus, errorThrown) {
                        Botble.showError('AJAX ERROR ! Check the console !');
                        console.error(errorThrown);
                        submitBtn.removeClass('button-loading');
                    }
                });
                return false;
            });

            deleteLogModal.on('hidden.bs.modal', function () {
                deleteLogForm.find('input[name=date]').val('');
                deleteLogModal.find('.modal-body p').html('');
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(BaseHelper::getAdminMasterLayoutTemplate(), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\work.com\platform/plugins/log-viewer/resources/views/logs.blade.php ENDPATH**/ ?>