<?php if (! $__env->hasRenderedOnce('48225e41-1fde-4d14-9fa2-13c63b29d5d7')): $__env->markAsRenderedOnce('48225e41-1fde-4d14-9fa2-13c63b29d5d7'); ?>
    <div id="admin-notification">
        <div id="notification-sidebar" class="sidebar show-notification-sidebar">
            <a class="close-btn" id="close-notification"><i class="fa fa-times"></i></a>

            <h2 class="title-notification-heading"><?php echo e(trans('core/base::notifications.notifications')); ?></h2>
            <p class="action-notification" <?php if(isset($adminNotifications) && count($adminNotifications)): ?> style="display: block" <?php endif; ?>>
                <a class="me-2 mark-read-all" href="<?php echo e(route('notifications.read-all-notification')); ?>"><?php echo e(trans('core/base::notifications.mark_as_read')); ?></a>
                <span><a class="delete-all-notifications" href="<?php echo e(route('notifications.destroy-all-notification')); ?>"><?php echo e(trans('core/base::notifications.clear')); ?></a></span>
            </p>
            <ul class="list-group list-item-notification"></ul>
        </div>
        <div class="has-loading" id="loading-notification" style="display: none;"><i class="fa fa-spinner fa-spin"></i></div>
    </div>

    <div id="sidebar-notification-backdrop"></div>
<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\work.com\platform/core/base/resources/views/notification/notification-content.blade.php ENDPATH**/ ?>