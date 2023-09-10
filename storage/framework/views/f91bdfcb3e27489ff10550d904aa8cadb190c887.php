<?php if (! $__env->hasRenderedOnce('8a7a369d-22a9-46da-a09b-9226fbe8ee4b')): $__env->markAsRenderedOnce('8a7a369d-22a9-46da-a09b-9226fbe8ee4b'); ?>
    <li class="dropdown dropdown-extended dropdown-inbox">
        <a href="<?php echo e(route('notifications.get-notification')); ?>" data-href="<?php echo e(route('notifications.update-notifications-count')); ?>" id="open-notification" class="dropdown-toggle dropdown-header-name">
            <input type="hidden" value="1" class="current-page">
            <i class="fas fa-bell"></i>
            <?php if($countNotificationUnread): ?>
                <span class="badge badge-default"> <?php echo e($countNotificationUnread); ?> </span>
            <?php endif; ?>
        </a>
    </li>
<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\work.com\platform/core/base/resources/views/notification/notification.blade.php ENDPATH**/ ?>