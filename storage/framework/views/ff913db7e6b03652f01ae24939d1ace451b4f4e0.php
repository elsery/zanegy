<div class="customer-address-payment-form">

    <?php if(EcommerceHelper::isEnabledGuestCheckout() && ! auth('customer')->check()): ?>
        <div class="form-group mb-3">
            <p><?php echo e(__('Already have an account?')); ?> <a href="<?php echo e(route('customer.login')); ?>"><?php echo e(__('Login')); ?></a></p>
        </div>
    <?php endif; ?>

    <?php if(auth('customer')->check()): ?>
        <div class="form-group mb-3">
            <?php if($isAvailableAddress): ?>
                <label class="control-label mb-2" for="address_id"><?php echo e(__('Select available addresses')); ?>:</label>
            <?php endif; ?>
            <?php
                $oldSessionAddressId = old('address.address_id', $sessionAddressId);
            ?>
            <div class="list-customer-address <?php if(! $isAvailableAddress): ?> d-none <?php endif; ?>">
                <div class="select--arrow">
                    <select name="address[address_id]" class="form-control" id="address_id">
                        <option value="new" <?php if($oldSessionAddressId == 'new'): echo 'selected'; endif; ?>><?php echo e(__('Add new address...')); ?></option>
                        <?php if($isAvailableAddress): ?>
                            <?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($address->id); ?>" <?php if($oldSessionAddressId == $address->id): echo 'selected'; endif; ?>><?php echo e($address->full_address); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </select>
                    <i class="fas fa-angle-down"></i>
                </div>
                <br>
                <div class="address-item-selected <?php if(! $sessionAddressId): ?> d-none <?php endif; ?>">
                    <?php if($isAvailableAddress && $oldSessionAddressId != 'new'): ?>
                        <?php if($oldSessionAddressId && $addresses->contains('id', $oldSessionAddressId)): ?>
                            <?php echo $__env->make('plugins/ecommerce::orders.partials.address-item', ['address' => $addresses->firstWhere('id', $oldSessionAddressId)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php elseif($defaultAddress = get_default_customer_address()): ?>
                            <?php echo $__env->make('plugins/ecommerce::orders.partials.address-item', ['address' => $defaultAddress], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php else: ?>
                            <?php echo $__env->make('plugins/ecommerce::orders.partials.address-item', ['address' => Arr::first($addresses)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <div class="list-available-address d-none">
                    <?php if($isAvailableAddress): ?>
                        <?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="address-item-wrapper" data-id="<?php echo e($address->id); ?>">
                                <?php echo $__env->make('plugins/ecommerce::orders.partials.address-item', compact('address'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="address-form-wrapper <?php if(auth('customer')->check() && $oldSessionAddressId !== 'new' && $isAvailableAddress): ?> d-none <?php endif; ?>">
        <div class="form-group mb-3 <?php $__errorArgs = ['address.name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <div class="form-input-wrapper">
                <input type="text" name="address[name]" id="address_name"
                       class="form-control"
                       required
                       value="<?php echo e(old('address.name', Arr::get($sessionCheckoutData, 'name')) ?: (auth('customer')->check() ? auth('customer')->user()->name : null)); ?>">
                <label for='address_name'><?php echo e(__('Full Name')); ?></label>
            </div>
            <?php echo Form::error('address.name', $errors); ?>

        </div>

        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="form-group  <?php $__errorArgs = ['address.email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <div class="form-input-wrapper">
                        <input type="email" name="address[email]" id="address_email"
                            class="form-control"
                           required
                            value="<?php echo e(old('address.email', Arr::get($sessionCheckoutData, 'email')) ?: (auth('customer')->check() ? auth('customer')->user()->email : null)); ?>">
                        <label for='address_email'><?php echo e(__('Email')); ?></label>
                    </div>
                    <?php echo Form::error('address.email', $errors); ?>

                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="form-group <?php $__errorArgs = ['address.phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <div class="form-input-wrapper">
                        <input type="tel" name="address[phone]" id="address_phone"
                               class="form-control"
                               <?php if(EcommerceHelper::isPhoneFieldOptionalAtCheckout()): ?> required <?php endif; ?>
                               value="<?php echo e(old('address.phone', Arr::get($sessionCheckoutData, 'phone')) ?: (auth('customer')->check() ? auth('customer')->user()->phone : null)); ?>">
                        <label for='address_phone'><?php echo e(__('Phone')); ?></label>
                    </div>
                    <?php echo Form::error('address.phone', $errors); ?>

                </div>
            </div>
        </div>

        <?php if(EcommerceHelper::isUsingInMultipleCountries()): ?>
            <div class="form-group mb-3 <?php $__errorArgs = ['address.country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <div class="select--arrow form-input-wrapper">
                    <select name="address[country]" class="form-control" required
                        data-form-parent=".customer-address-payment-form" id="address_country" data-type="country">
                        <?php $__currentLoopData = EcommerceHelper::getAvailableCountries(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $countryCode => $countryName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($countryCode); ?>" <?php if(old('address.country', Arr::get($sessionCheckoutData, 'country')) == $countryCode): ?> selected <?php endif; ?>><?php echo e($countryName); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <i class="fas fa-angle-down"></i>
                    <label for='address_country'><?php echo e(__('Country')); ?></label>
                </div>
                <?php echo Form::error('address.country', $errors); ?>

            </div>
        <?php else: ?>
            <input type="hidden" name="address[country]" id="address_country" value="<?php echo e(EcommerceHelper::getFirstCountryId()); ?>">
        <?php endif; ?>

        <div class="row">
            <div class="col-sm-6 col-12">
                <div class="form-group mb-3 <?php $__errorArgs = ['address.state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <?php if(EcommerceHelper::loadCountriesStatesCitiesFromPluginLocation()): ?>
                        <div class="select--arrow form-input-wrapper">
                            <select name="address[state]" class="form-control" required
                                data-form-parent=".customer-address-payment-form" id="address_state" data-type="state" data-url="<?php echo e(route('ajax.states-by-country')); ?>">
                                <option value=""><?php echo e(__('Select state...')); ?></option>
                                <?php if(old('address.country', Arr::get($sessionCheckoutData, 'country')) || !EcommerceHelper::isUsingInMultipleCountries()): ?>
                                    <?php $__currentLoopData = EcommerceHelper::getAvailableStatesByCountry(old('address.country', Arr::get($sessionCheckoutData, 'country'))); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stateId => $stateName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($stateId); ?>" <?php if(old('address.state', Arr::get($sessionCheckoutData, 'state')) == $stateId): ?> selected <?php endif; ?>><?php echo e($stateName); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </select>
                            <i class="fas fa-angle-down"></i>
                            <label for='address_state'><?php echo e(__('State')); ?></label>
                        </div>
                    <?php else: ?>
                        <div class="form-input-wrapper">
                            <input id="address_state" type="text" class="form-control" required name="address[state]" value="<?php echo e(old('address.state', Arr::get($sessionCheckoutData, 'state'))); ?>">
                            <label for='address_state'><?php echo e(__('State')); ?></label>
                        </div>
                    <?php endif; ?>
                    <?php echo Form::error('address.state', $errors); ?>

                </div>
            </div>

            <div class="col-sm-6 col-12">
                <div class="form-group  <?php $__errorArgs = ['address.city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <?php if(EcommerceHelper::loadCountriesStatesCitiesFromPluginLocation()): ?>
                        <div class="select--arrow form-input-wrapper">
                            <select name="address[city]" class="form-control" required id="address_city" data-type="city" data-url="<?php echo e(route('ajax.cities-by-state')); ?>">
                                <option value=""><?php echo e(__('Select city...')); ?></option>
                                <?php if(old('address.state', Arr::get($sessionCheckoutData, 'state'))): ?>
                                    <?php $__currentLoopData = EcommerceHelper::getAvailableCitiesByState(old('address.state', Arr::get($sessionCheckoutData, 'state'))); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cityId => $cityName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($cityId); ?>" <?php if(old('address.city', Arr::get($sessionCheckoutData, 'city')) == $cityId): ?> selected <?php endif; ?>><?php echo e($cityName); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </select>
                            <i class="fas fa-angle-down"></i>
                            <label for='address_city'><?php echo e(__('City')); ?></label>
                        </div>
                    <?php else: ?>
                        <div class="form-input-wrapper">
                            <input id="address_city" type="text" class="form-control" required name="address[city]" value="<?php echo e(old('address.city', Arr::get($sessionCheckoutData, 'city'))); ?>">
                            <label for='address_city'><?php echo e(__('City')); ?></label>
                        </div>
                    <?php endif; ?>
                    <?php echo Form::error('address.city', $errors); ?>

                </div>
            </div>
        </div>

        <div class="form-group mb-3 <?php $__errorArgs = ['address.address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <div class="form-input-wrapper">
                <input id="address_address" type="text" class="form-control" required name="address[address]" value="<?php echo e(old('address.address', Arr::get($sessionCheckoutData, 'address'))); ?>" autocomplete="false">
                <label for='address_address'><?php echo e(__('Address')); ?></label>
            </div>
            <?php echo Form::error('address.address', $errors); ?>

        </div>

        <?php if(EcommerceHelper::isZipCodeEnabled()): ?>
            <div class="form-group mb-3 <?php $__errorArgs = ['address.zip_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <div class="form-input-wrapper">
                    <input id="address_zip_code" type="text"
                        class="form-control" name="address[zip_code]"
                       required
                        value="<?php echo e(old('address.zip_code', Arr::get($sessionCheckoutData, 'zip_code'))); ?>">
                    <label for='address_zip_code'><?php echo e(__('Zip code')); ?></label>
                </div>
                <?php echo Form::error('address.zip_code', $errors); ?>

            </div>
        <?php endif; ?>
    </div>

    <?php if(! auth('customer')->check()): ?>
        <div class="form-group mb-3">
            <input type="checkbox" name="create_account" value="1" id="create_account" <?php if(old('create_account') == 1): ?> checked <?php endif; ?>>
            <label for="create_account" class="control-label ps-2"><?php echo e(__('Register an account with above information?')); ?></label>
        </div>

        <div class="password-group <?php if(! $errors->has('password') && ! $errors->has('password_confirmation')): ?> d-none <?php endif; ?>">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="form-group  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <div class="form-input-wrapper">
                            <input id="password" type="password" class="form-control" name="password" autocomplete="password">
                            <label for='password'><?php echo e(__('Password')); ?></label>
                        </div>
                        <?php echo Form::error('password', $errors); ?>

                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <div class="form-input-wrapper">
                            <input id="password-confirm" type="password" class="form-control" autocomplete="password-confirmation" name="password_confirmation">
                            <label for='password-confirm'><?php echo e(__('Password confirmation')); ?></label>
                        </div>
                        <?php echo Form::error('password_confirmation', $errors); ?>

                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\work.com\platform/plugins/ecommerce/resources/views/orders/partials/address-form.blade.php ENDPATH**/ ?>