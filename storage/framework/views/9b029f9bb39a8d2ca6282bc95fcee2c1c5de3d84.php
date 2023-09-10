<div class="wrapper-filter">
    <p><?php echo e(trans('core/table::table.filters')); ?></p>

    <input type="hidden" class="filter-data-url" value="<?php echo e(route('tables.get-filter-input')); ?>">

    <div class="sample-filter-item-wrap hidden">
        <div class="filter-item form-filter">
            <?php echo Form::customSelect('filter_columns[]', array_combine(array_keys($columns), array_column($columns, 'title')), null, ['class' => 'filter-column-key', 'wrapper_class' => 'mb-0']); ?>


            <?php echo Form::customSelect('filter_operators[]', [
                'like' => trans('core/table::table.contains'),
                '=' => trans('core/table::table.is_equal_to'),
                '>' => trans('core/table::table.greater_than'),
                '<' => trans('core/table::table.less_than'),
            ], null, ['class' => 'filter-operator filter-column-operator', 'wrapper_class' => 'mb-0']); ?>

            <span class="filter-column-value-wrap">
                <input class="form-control filter-column-value" type="text" placeholder="<?php echo e(trans('core/table::table.value')); ?>"
                       name="filter_values[]">
            </span>
            <span class="btn-remove-filter-item" title="<?php echo e(trans('core/table::table.delete')); ?>">
                <i class="fa fa-trash text-danger"></i>
            </span>
        </div>
    </div>

    <?php echo e(Form::open(['method' => 'GET', 'class' => 'filter-form'])); ?>

        <input type="hidden" name="filter_table_id" class="filter-data-table-id" value="<?php echo e($tableId); ?>">
        <input type="hidden" name="class" class="filter-data-class" value="<?php echo e($class); ?>">
        <div class="filter_list inline-block filter-items-wrap">
            <?php $__currentLoopData = $requestFilters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filterItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="filter-item form-filter <?php if($loop->first): ?> filter-item-default <?php endif; ?>">
                    <?php echo Form::customSelect('filter_columns[]', ['' => trans('core/table::table.select_field')] + array_combine(array_keys($columns), array_column($columns, 'title')), $filterItem['column'], ['class' => 'filter-column-key', 'wrapper_class' => 'mb-0']); ?>


                    <?php echo Form::customSelect('filter_operators[]', [
                        'like' => trans('core/table::table.contains'),
                        '=' => trans('core/table::table.is_equal_to'),
                        '>' => trans('core/table::table.greater_than'),
                        '<' => trans('core/table::table.less_than'),
                    ], $filterItem['operator'], ['class' => 'filter-operator filter-column-operator', 'wrapper_class' => 'mb-0']); ?>

                    <span class="filter-column-value-wrap">
                        <input class="form-control filter-column-value" type="text" placeholder="<?php echo e(trans('core/table::table.value')); ?>"
                               name="filter_values[]" value="<?php echo e($filterItem['value']); ?>">
                    </span>
                    <?php if($loop->first): ?>
                        <span class="btn-reset-filter-item" title="<?php echo e(trans('core/table::table.reset')); ?>">
                            <i class="fa fa-eraser text-info" style="font-size: 13px;"></i>
                        </span>
                    <?php else: ?>
                        <span class="btn-remove-filter-item" title="<?php echo e(trans('core/table::table.delete')); ?>">
                            <i class="fa fa-trash text-danger"></i>
                        </span>
                    <?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div style="margin-top: 10px;">
            <a href="javascript:;" class="btn btn-secondary add-more-filter"><?php echo e(trans('core/table::table.add_additional_filter')); ?></a>
            <a href="<?php echo e(URL::current()); ?>" class="btn btn-info <?php if(!request()->has('filter_table_id')): ?> hidden <?php endif; ?>"><?php echo e(trans('core/table::table.reset')); ?></a>
            <button type="submit" class="btn btn-primary btn-apply"><?php echo e(trans('core/table::table.apply')); ?></button>
        </div>

    <?php echo e(Form::close()); ?>

</div>
<?php /**PATH C:\xampp\htdocs\work.com\platform/core/table/resources/views/filter.blade.php ENDPATH**/ ?>