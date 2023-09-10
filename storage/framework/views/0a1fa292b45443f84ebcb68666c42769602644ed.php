<?php
    Assets::addScriptsDirectly(config('core.base.general.editor.ckeditor.js'))
        ->addScriptsDirectly('vendor/core/core/base/js/editor.js');

    if (BaseHelper::getRichEditor() == 'ckeditor' && App::getLocale() != 'en') {
        Assets::addScriptsDirectly('https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/translations/' . App::getLocale() . '.js');
    }

    $attributes['class'] = Arr::get($attributes, 'class', '') . ' form-control editor-ckeditor ays-ignore';
    $attributes['id'] = Arr::get($attributes, 'id', $name);
    $attributes['rows'] = Arr::get($attributes, 'rows', 4);
?>

<?php echo Form::textarea($name, BaseHelper::cleanEditorContent($value), $attributes); ?>

<?php /**PATH C:\xampp\htdocs\work.com\platform/core/base/resources/views/forms/partials/ckeditor.blade.php ENDPATH**/ ?>