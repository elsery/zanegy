<?php
    $supportedLocales = Language::getSupportedLocales();
    if (!isset($options) || empty($options)) {
        $options = [
            'before' => '',
            'lang_flag' => true,
            'lang_name' => true,
            'class' => '',
            'after' => '',
        ];
    }
?>

<?php if($supportedLocales && count($supportedLocales) > 1): ?>
    <?php
        $languageDisplay = setting('language_display', 'all');
    ?>
    <?php if(setting('language_switcher_display', 'dropdown') == 'dropdown'): ?>
        <li>
            <a class="language-dropdown-active" href="#"> <?php if(Arr::get($options, 'lang_flag', true) && ($languageDisplay == 'all' || $languageDisplay == 'flag')): ?>
                    <?php echo language_flag(Language::getCurrentLocaleFlag(), Language::getCurrentLocaleName()); ?>

                <?php endif; ?>
                <?php if(Arr::get($options, 'lang_name', true) && ($languageDisplay == 'all' || $languageDisplay == 'name')): ?>
                    <?php echo e(Language::getCurrentLocaleName()); ?>

                <?php endif; ?>
                <i class="fi-rs-angle-small-down"></i>
            </a>
            <ul class="language-dropdown <?php echo e(Arr::get($options, 'class')); ?>">
                <?php $__currentLoopData = $supportedLocales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($localeCode != Language::getCurrentLocale()): ?>
                        <li>
                            <a href="<?php echo e(Language::getSwitcherUrl($localeCode, $properties['lang_code'])); ?>">
                                <?php if(Arr::get($options, 'lang_flag', true) && ($languageDisplay == 'all' || $languageDisplay == 'flag')): ?><?php echo language_flag($properties['lang_flag'], $properties['lang_name']); ?><?php endif; ?>
                                <?php if(Arr::get($options, 'lang_name', true) && ($languageDisplay == 'all' || $languageDisplay == 'name')): ?><span><?php echo e($properties['lang_name']); ?></span><?php endif; ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </li>
    <?php else: ?>
        <?php $__currentLoopData = $supportedLocales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($localeCode != Language::getCurrentLocale()): ?>
                <li>
                    <a href="<?php echo e(Language::getSwitcherUrl($localeCode, $properties['lang_code'])); ?>">
                        <?php if(Arr::get($options, 'lang_flag', true) && ($languageDisplay == 'all' || $languageDisplay == 'flag')): ?><?php echo language_flag($properties['lang_flag'], $properties['lang_name']); ?><?php endif; ?>
                        <?php if(Arr::get($options, 'lang_name', true) && ($languageDisplay == 'all' || $languageDisplay == 'name')): ?><span><?php echo e($properties['lang_name']); ?></span><?php endif; ?>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\work.com\platform/themes/nest/partials/language-switcher.blade.php ENDPATH**/ ?>