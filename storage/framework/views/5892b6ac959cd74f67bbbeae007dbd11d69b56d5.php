<?php $__env->startSection('content'); ?>
    <div class="max-width-1200" id="main-order-content">
        <div class="ui-layout">
            <div class="flexbox-layout-sections">
                <?php if($order->status == \Botble\Ecommerce\Enums\OrderStatusEnum::CANCELED): ?>
                    <div class="ui-layout__section">
                        <div class="ui-layout__item">
                            <div class="ui-banner ui-banner--status-warning">
                                <div class="ui-banner__ribbon">
                                    <svg class="svg-next-icon svg-next-icon-size-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M7 18c-.265 0-.52-.105-.707-.293l-6-6c-.39-.39-.39-1.023 0-1.414s1.023-.39 1.414 0l5.236 5.236L18.24 2.35c.36-.42.992-.468 1.41-.11.42.36.47.99.11 1.41l-12 14c-.182.212-.444.338-.722.35H7z"></path>
                                    </svg>
                                </div>
                                <div class="ui-banner__content">
                                    <h2 class="ui-banner__title"><?php echo e(trans('plugins/ecommerce::order.order_canceled')); ?></h2>
                                    <div class="ws-nm">
                                        <?php echo e(trans('plugins/ecommerce::order.order_was_canceled_at')); ?>

                                        <strong><?php echo e(BaseHelper::formatDate($order->updated_at, 'H:i d/m/Y')); ?></strong>.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="flexbox-layout-section-primary mt20">
                    <div class="ui-layout__item">
                        <div class="wrapper-content">
                            <div class="pd-all-20">
                                <div class="flexbox-grid-default">
                                    <div class="flexbox-auto-right mr5">
                                        <label class="title-product-main text-no-bold"><?php echo e(trans('plugins/ecommerce::order.order_information')); ?> <?php echo e($order->code); ?></label>
                                    </div>
                                </div>
                                <div class="mt20">
                                    <?php if($order->completed_at): ?>
                                        <svg class="svg-next-icon svg-next-icon-size-16 next-icon--right-spacing-quartered text-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" enable-background="new 0 0 24 24">
                                            <g><path d="M20.2 1H3.9C2.3 1 1 2.3 1 3.9v16.9C1 22 2.1 23 3.4 23h17.3c1.3 0 2.3-1 2.3-2.3V3.9C23 2.3 21.8 1 20.2 1zM20 4v11h-2.2c-1.3 0-2.8 1.5-2.8 2.8v1c0 .3.2.2-.1.2H8.2c-.3 0-.2.1-.2-.2v-1C8 16.5 6.7 15 5.3 15H4V4h16zM10.8 14.7c.2.2.6.2.8 0l7.1-6.9c.3-.3.3-.6 0-.8l-.8-.8c-.2-.2-.6-.2-.8 0l-5.9 5.7-2.4-2.3c-.2-.2-.6-.2-.8 0l-.8.8c-.2.2-.2.6 0 .8l3.6 3.5z"></path></g>
                                        </svg>
                                        <strong class="ml5 text-info"><?php echo e(trans('plugins/ecommerce::order.completed')); ?></strong>
                                    <?php else: ?>
                                        <svg class="svg-next-icon svg-next-icon-size-16 text-warning" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" enable-background="new 0 0 16 16">
                                            <g><path d="M13.9130435,0 L2.08695652,0 C0.936347826,0 0,0.936347826 0,2.08695652 L0,14.2608696 C0,15.2194783 0.780521739,16 1.73913043,16 L14.2608696,16 C15.2194783,16 16,15.2194783 16,14.2608696 L16,2.08695652 C16,0.936347826 15.0636522,0 13.9130435,0 L13.9130435,0 Z M13.9130435,2.08695652 L13.9130435,10.4347826 L12.173913,10.4347826 C11.2153043,10.4347826 10.4347826,11.2153043 10.4347826,12.173913 L10.4347826,12.8695652 C10.4347826,13.0615652 10.2789565,13.2173913 10.0869565,13.2173913 L5.2173913,13.2173913 C5.0253913,13.2173913 4.86956522,13.0615652 4.86956522,12.8695652 L4.86956522,12.173913 C4.86956522,11.2153043 4.08904348,10.4347826 3.13043478,10.4347826 L2.08695652,10.4347826 L2.08695652,2.08695652 L13.9130435,2.08695652 L13.9130435,2.08695652 Z"></path></g>
                                        </svg>
                                        <strong class="ml5 text-warning"><?php echo e(trans('plugins/ecommerce::order.uncompleted')); ?></strong>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="pd-all-20 p-none-t border-top-title-main">
                                <div class="table-wrap">
                                    <table class="table-order table-divided">
                                        <tbody>
                                            <?php $__currentLoopData = $order->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                    $product = $orderProduct->product->original_product;
                                                ?>

                                                <tr>
                                                    <td class="width-60-px min-width-60-px vertical-align-t">
                                                        <div class="wrap-img">
                                                            <img class="thumb-image thumb-image-cartorderlist" src="<?php echo e(RvMedia::getImageUrl($orderProduct->product_image, 'thumb', false, RvMedia::getDefaultImage())); ?>" alt="<?php echo e($orderProduct->product_name); ?>">
                                                        </div>
                                                    </td>
                                                    <td class="pl5 p-r5 min-width-200-px">
                                                        <a class="text-underline hover-underline pre-line" target="_blank" href="<?php echo e($product && $product->id && Auth::user()->hasPermission('products.edit') ? route('products.edit', $product->id) : '#'); ?>" title="<?php echo e($orderProduct->product_name); ?>">
                                                            <?php echo e($orderProduct->product_name); ?>

                                                        </a>
                                                        &nbsp;
                                                        <?php if($sku = Arr::get($orderProduct->options, 'sku')): ?>
                                                            (<?php echo e(trans('plugins/ecommerce::order.sku')); ?>:
                                                            <strong><?php echo e($sku); ?></strong>)
                                                        <?php endif; ?>

                                                        <?php if($attributes = Arr::get($orderProduct->options, 'attributes')): ?>
                                                            <p class="mb-0">
                                                                <small><?php echo e($attributes); ?></small>
                                                            </p>
                                                        <?php endif; ?>

                                                        <?php if(! empty($orderProduct->product_options) && is_array($orderProduct->product_options)): ?>
                                                            <?php echo render_product_options_html($orderProduct->product_options, $orderProduct->price); ?>

                                                        <?php endif; ?>

                                                        <?php echo $__env->make('plugins/ecommerce::themes.includes.cart-item-options-extras', ['options' => $orderProduct->options], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                                        <?php echo apply_filters(ECOMMERCE_ORDER_DETAIL_EXTRA_HTML, null); ?>

                                                        <?php if($order->shipment->id): ?>
                                                            <ul class="unstyled">
                                                                <li class="simple-note">
                                                                    <a>
                                                                        <span><?php echo e($orderProduct->qty); ?></span>
                                                                        <span class="text-lowercase"> <?php echo e(trans('plugins/ecommerce::order.completed')); ?></span>
                                                                    </a>
                                                                    <ul class="dom-switch-target line-item-properties small">
                                                                        <li class="ws-nm">
                                                                            <span class="bull">↳</span>
                                                                            <span class="black"><?php echo e(trans('plugins/ecommerce::order.shipping')); ?> </span>
                                                                            <a class="text-underline bold-light" target="_blank" title="<?php echo e($order->shipping_method_name); ?>" href="<?php echo e(route('ecommerce.shipments.edit', $order->shipment->id)); ?>"><?php echo e($order->shipping_method_name); ?></a>
                                                                        </li>

                                                                        <?php if(is_plugin_active('marketplace') && $order->store->name): ?>
                                                                            <li class="ws-nm">
                                                                                <span class="bull">↳</span>
                                                                                <span class="black"><?php echo e(trans('plugins/marketplace::store.store')); ?></span>
                                                                                <a href="<?php echo e($order->store->url); ?>" class="bold-light" target="_blank"><?php echo e($order->store->name); ?></a>
                                                                            </li>
                                                                        <?php endif; ?>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td class="pl5 p-r5 text-end">
                                                        <div class="inline_block">
                                                            <span><?php echo e(format_price($orderProduct->price)); ?></span>
                                                        </div>
                                                    </td>
                                                    <td class="pl5 p-r5 text-center">x</td>
                                                    <td class="pl5 p-r5">
                                                        <span><?php echo e($orderProduct->qty); ?></span>
                                                    </td>
                                                    <td class="pl5 text-end"><?php echo e(format_price($orderProduct->price * $orderProduct->qty)); ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="pd-all-20 p-none-t">
                                <div class="flexbox-grid-default block-rps-768">
                                    <div class="flexbox-auto-right p-r5">

                                    </div>
                                    <div class="flexbox-auto-right pl5">
                                        <div class="table-wrap">
                                            <table class="table-normal table-none-border table-color-gray-text">
                                                <tbody>
                                                <tr>
                                                    <td class="text-end color-subtext"><?php echo e(trans('plugins/ecommerce::order.sub_amount')); ?></td>
                                                    <td class="text-end pl10">
                                                        <span><?php echo e(format_price($order->sub_total)); ?></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-end color-subtext mt10">
                                                        <p class="mb0"><?php echo e(trans('plugins/ecommerce::order.discount')); ?></p>
                                                        <?php if($order->coupon_code): ?>
                                                            <p class="mb0"><?php echo trans('plugins/ecommerce::order.coupon_code', ['code' => Html::tag('strong', $order->coupon_code)->toHtml()]); ?></p>
                                                        <?php elseif($order->discount_description): ?>
                                                            <p class="mb0"><?php echo e($order->discount_description); ?></p>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td class="text-end p-none-b pl10">
                                                        <p class="mb0"><?php echo e(format_price($order->discount_amount)); ?></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-end color-subtext mt10">
                                                        <p class="mb0"><?php echo e(trans('plugins/ecommerce::order.shipping_fee')); ?></p>
                                                        <p class="mb0 font-size-12px"><?php echo e($order->shipping_method_name); ?></p>
                                                        <p class="mb0 font-size-12px"><?php echo e($weight); ?> <?php echo e(ecommerce_weight_unit(true)); ?></p>
                                                    </td>
                                                    <td class="text-end p-none-t pl10">
                                                        <p class="mb0"><?php echo e(format_price($order->shipping_amount)); ?></p>
                                                    </td>
                                                </tr>
                                                <?php if(EcommerceHelper::isTaxEnabled()): ?>
                                                    <tr>
                                                        <td class="text-end color-subtext mt10">
                                                            <p class="mb0"><?php echo e(trans('plugins/ecommerce::order.tax')); ?></p>
                                                        </td>
                                                        <td class="text-end p-none-t pl10">
                                                            <p class="mb0"><?php echo e(format_price($order->tax_amount)); ?></p>
                                                        </td>
                                                    </tr>
                                                <?php endif; ?>
                                                <tr>
                                                    <td class="text-end mt10">
                                                        <p class="mb0 color-subtext"><?php echo e(trans('plugins/ecommerce::order.total_amount')); ?></p>
                                                        <?php if(is_plugin_active('payment') && $order->payment->id): ?>
                                                            <p class="mb0  font-size-12px"><a href="<?php echo e(route('payment.show', $order->payment->id)); ?>" target="_blank"><?php echo e($order->payment->payment_channel->label()); ?></a>
                                                            </p>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td class="text-end text-no-bold p-none-t pl10">
                                                        <?php if(is_plugin_active('payment') && $order->payment->id): ?>
                                                            <a href="<?php echo e(route('payment.show', $order->payment->id)); ?>" target="_blank">
                                                                <span><?php echo e(format_price($order->amount)); ?></span>
                                                            </a>
                                                        <?php else: ?>
                                                            <span><?php echo e(format_price($order->amount)); ?></span>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border-bottom"></td>
                                                    <td class="border-bottom"></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-end color-subtext"><?php echo e(trans('plugins/ecommerce::order.paid_amount')); ?></td>
                                                    <td class="text-end color-subtext pl10">
                                                        <?php if(is_plugin_active('payment') && $order->payment->id): ?>
                                                            <a href="<?php echo e(route('payment.show', $order->payment->id)); ?>" target="_blank">
                                                                <span><?php echo e(format_price($order->payment->status == \Botble\Payment\Enums\PaymentStatusEnum::COMPLETED ? $order->payment->amount : 0)); ?></span>
                                                            </a>
                                                        <?php else: ?>
                                                            <span><?php echo e(format_price(is_plugin_active('payment') && $order->payment->status == \Botble\Payment\Enums\PaymentStatusEnum::COMPLETED ? $order->payment->amount : 0)); ?></span>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                                <?php if(is_plugin_active('payment') && $order->payment->status == \Botble\Payment\Enums\PaymentStatusEnum::REFUNDED): ?>
                                                    <tr class="hidden">
                                                        <td class="text-end color-subtext"><?php echo e(trans('plugins/ecommerce::order.refunded_amount')); ?></td>
                                                        <td class="text-end pl10">
                                                            <span><?php echo e(format_price($order->payment->amount)); ?></span>
                                                        </td>
                                                    </tr>
                                                <?php endif; ?>
                                                <tr class="hidden">
                                                    <td class="text-end color-subtext"><?php echo e(trans('plugins/ecommerce::order.amount_received')); ?></td>
                                                    <td class="text-end pl10">
                                                        <span><?php echo e(format_price(is_plugin_active('payment') && $order->payment->status == \Botble\Payment\Enums\PaymentStatusEnum::COMPLETED ? $order->amount : 0)); ?></span>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <br>
                                        <?php if($order->isInvoiceAvailable()): ?>
                                            <div class="text-end">
                                                <a href="<?php echo e(route('orders.generate-invoice', $order->id)); ?>?type=print" class="btn btn-primary me-2" target="_blank">
                                                    <i class="fa fa-print"></i> <?php echo e(trans('plugins/ecommerce::order.print_invoice')); ?>

                                                </a>
                                                <a href="<?php echo e(route('orders.generate-invoice', $order->id)); ?>" class="btn btn-info">
                                                    <i class="fa fa-download"></i> <?php echo e(trans('plugins/ecommerce::order.download_invoice')); ?>

                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        <div class="py-3">
                                            <form action="<?php echo e(route('orders.edit', $order->id)); ?>">
                                                <label class="text-title-field"><?php echo e(trans('plugins/ecommerce::order.note')); ?></label>
                                                <textarea class="ui-text-area textarea-auto-height" name="description" rows="3" placeholder="<?php echo e(trans('plugins/ecommerce::order.add_note')); ?>"><?php echo e($order->description); ?></textarea>
                                                <div class="mt10">
                                                    <button type="button" class="btn btn-primary btn-update-order"><?php echo e(trans('plugins/ecommerce::order.save')); ?></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php if($order->status != \Botble\Ecommerce\Enums\OrderStatusEnum::CANCELED || $order->is_confirmed): ?>
                                <div class="pd-all-20 border-top-title-main">
                                    <div class="flexbox-grid-default flexbox-align-items-center">
                                        <div class="flexbox-auto-left">
                                            <svg class="svg-next-icon svg-next-icon-size-20 <?php if($order->is_confirmed): ?> svg-next-icon-green <?php else: ?> svg-next-icon-gray <?php endif; ?>" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path d="M7 18c-.265 0-.52-.105-.707-.293l-6-6c-.39-.39-.39-1.023 0-1.414s1.023-.39 1.414 0l5.236 5.236L18.24 2.35c.36-.42.992-.468 1.41-.11.42.36.47.99.11 1.41l-12 14c-.182.212-.444.338-.722.35H7z"></path>
                                            </svg>
                                        </div>
                                        <div class="flexbox-auto-right ml15 mr15 text-upper">
                                            <?php if($order->is_confirmed): ?>
                                                <span><?php echo e(trans('plugins/ecommerce::order.order_was_confirmed')); ?></span>
                                            <?php else: ?>
                                                <span><?php echo e(trans('plugins/ecommerce::order.confirm_order')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                        <?php if(!$order->is_confirmed): ?>
                                            <div class="flexbox-auto-left">
                                                <form action="<?php echo e(route('orders.confirm')); ?>">
                                                    <input type="hidden" name="order_id" value="<?php echo e($order->id); ?>">
                                                    <button class="btn btn-primary btn-confirm-order"><?php echo e(trans('plugins/ecommerce::order.confirm')); ?></button>
                                                </form>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="pd-all-20 border-top-title-main">
                                <div class="flexbox-grid-default flexbox-flex-wrap flexbox-align-items-center">
                                    <?php if($order->status == \Botble\Ecommerce\Enums\OrderStatusEnum::CANCELED): ?>
                                        <div class="flexbox-auto-left">
                                            <svg class="svg-next-icon svg-next-icon-size-24 svg-next-icon-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" enable-background="new 0 0 24 24">
                                                <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm0 4c1.4 0 2.7.4 3.9 1L12 8.8 8.8 12 5 15.9c-.6-1.1-1-2.5-1-3.9 0-4.4 3.6-8 8-8zm0 16c-1.4 0-2.7-.4-3.9-1l3.9-3.9 3.2-3.2L19 8.1c.6 1.1 1 2.5 1 3.9 0 4.4-3.6 8-8 8z"></path>
                                            </svg>
                                        </div>
                                        <div class="flexbox-auto-content ml15 mr15 text-upper">
                                            <span><?php echo e(trans('plugins/ecommerce::order.order_was_canceled')); ?></span>
                                        </div>
                                    <?php elseif(is_plugin_active('payment') && $order->payment->id): ?>
                                        <div class="flexbox-auto-left">
                                            <?php if(!$order->payment->status || $order->payment->status == \Botble\Payment\Enums\PaymentStatusEnum::PENDING): ?>
                                                <svg class="svg-next-icon svg-next-icon-size-24 svg-next-icon-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" enable-background="new 0 0 24 24">
                                                    <g><path d="M23.6 10H.4c-.2 0-.4.5-.4.7v7.7c0 .7.6 1.6 1.3 1.6h21.4c.7 0 1.3-.9 1.3-1.6v-7.7c0-.2-.2-.7-.4-.7zM20 16.6c0 .2-.2.4-.4.4h-4.1c-.2 0-.4-.2-.4-.4v-2.1c0-.2.2-.4.4-.4h4.1c.2 0 .4.2.4.4v2.1zM22.7 4H1.3C.6 4 0 4.9 0 5.6v1.7c0 .2.2.7.4.7h23.1c.3 0 .5-.5.5-.7V5.6c0-.7-.6-1.6-1.3-1.6z"></path></g>
                                                </svg>
                                            <?php elseif($order->payment->status == \Botble\Payment\Enums\PaymentStatusEnum::COMPLETED || $order->payment->status == \Botble\Payment\Enums\PaymentStatusEnum::PENDING): ?>
                                                <svg class="svg-next-icon svg-next-icon-size-20 svg-next-icon-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M7 18c-.265 0-.52-.105-.707-.293l-6-6c-.39-.39-.39-1.023 0-1.414s1.023-.39 1.414 0l5.236 5.236L18.24 2.35c.36-.42.992-.468 1.41-.11.42.36.47.99.11 1.41l-12 14c-.182.212-.444.338-.722.35H7z"></path>
                                                </svg>
                                            <?php endif; ?>
                                        </div>
                                        <div class="flexbox-auto-content ml15 mr15 text-upper">
                                            <?php if(!$order->payment->status || $order->payment->status == \Botble\Payment\Enums\PaymentStatusEnum::PENDING): ?>
                                                <span><?php echo e(trans('plugins/ecommerce::order.pending_payment')); ?></span>
                                            <?php elseif($order->payment->status == \Botble\Payment\Enums\PaymentStatusEnum::COMPLETED): ?>
                                                <span><?php echo e(trans('plugins/ecommerce::order.payment_was_accepted', ['money' => format_price($order->payment->amount - $order->payment->refunded_amount)])); ?></span>
                                            <?php elseif($order->payment->amount - $order->payment->refunded_amount == 0): ?>
                                                <span><?php echo e(trans('plugins/ecommerce::order.payment_was_refunded')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                        <?php if(!$order->payment->status || in_array($order->payment->status, [\Botble\Payment\Enums\PaymentStatusEnum::PENDING])): ?>
                                            <div class="flexbox-auto-left">
                                                <button class="btn btn-primary btn-trigger-confirm-payment" data-target="<?php echo e(route('orders.confirm-payment', $order->id)); ?>"><?php echo e(trans('plugins/ecommerce::order.confirm_payment')); ?></button>
                                            </div>
                                        <?php endif; ?>
                                        <?php if($order->payment->status == \Botble\Payment\Enums\PaymentStatusEnum::COMPLETED && (($order->payment->amount - $order->payment->refunded_amount > 0) || ($order->products->sum('qty') - $order->products->sum('restock_quantity') > 0))): ?>
                                            <div class="flexbox-auto-left">
                                                <button class="btn btn-secondary ml10 btn-trigger-refund"><?php echo e(trans('plugins/ecommerce::order.refund')); ?></button>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if(EcommerceHelper::countDigitalProducts($order->products) != $order->products->count()): ?>
                                <div class="pd-all-20 border-top-title-main">
                                    <div class="flexbox-grid-default flexbox-flex-wrap flexbox-align-items-center">
                                        <?php if($order->status == \Botble\Ecommerce\Enums\OrderStatusEnum::CANCELED && !$order->shipment->id): ?>
                                            <div class="flexbox-auto-left">
                                                <svg class="svg-next-icon svg-next-icon-size-20 svg-next-icon-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M7 18c-.265 0-.52-.105-.707-.293l-6-6c-.39-.39-.39-1.023 0-1.414s1.023-.39 1.414 0l5.236 5.236L18.24 2.35c.36-.42.992-.468 1.41-.11.42.36.47.99.11 1.41l-12 14c-.182.212-.444.338-.722.35H7z"></path>
                                                </svg>
                                            </div>
                                            <div class="flexbox-auto-content ml15 mr15 text-upper">
                                                <span><?php echo e(trans('plugins/ecommerce::order.all_products_are_not_delivered')); ?></span>
                                            </div>
                                        <?php else: ?>
                                            <?php if($order->shipment->id): ?>
                                                <div class="flexbox-auto-left">
                                                    <svg class="svg-next-icon svg-next-icon-size-20 svg-next-icon-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                        <path d="M7 18c-.265 0-.52-.105-.707-.293l-6-6c-.39-.39-.39-1.023 0-1.414s1.023-.39 1.414 0l5.236 5.236L18.24 2.35c.36-.42.992-.468 1.41-.11.42.36.47.99.11 1.41l-12 14c-.182.212-.444.338-.722.35H7z"></path>
                                                    </svg>
                                                </div>
                                                <div class="flexbox-auto-content ml15 mr15 text-upper">
                                                    <span><?php echo e(trans('plugins/ecommerce::order.delivery')); ?></span>
                                                </div>
                                            <?php else: ?>
                                                <div class="flexbox-auto-left">
                                                    <svg class="svg-next-icon svg-next-icon-size-24 svg-next-icon-gray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" enable-background="new 0 0 24 24">
                                                        <path d="M18.5 8h1.6c.3 0 .7 0 .9.3l2.7 2.6c.2.2.4.5.4.9v5c0 .2-.1.2-.3.2h-.3c-.2 0-.5-.1-.6-.3-.6-1.3-1.9-2.1-3.4-2.1-.6 0-1.3.2-1.9.5-.2.1-.5 0-.5-.2v-5.8c-.1-.7.7-1.1 1.4-1.1zm-17.2-4h12.9c.7 0 .8 1 .8 1.7v10.2c0 .7-.1 1.1-.8 1.1h-3.8c-.2 0-.3 0-.4-.2-.6-1.4-1.9-2.2-3.5-2.2s-2.9.9-3.5 2.2c0 .2-.2.2-.4.2h-1.3c-.7 0-1.3-.4-1.3-1.1v-10.2c0-.7.6-1.7 1.3-1.7z"></path>
                                                        <circle cx="19.3" cy="18.5" r="2.1"></circle>
                                                        <circle cx="6.5" cy="18.5" r="2.1"></circle>
                                                    </svg>
                                                </div>
                                                <div class="flexbox-auto-content ml15 mr15 text-upper">
                                                    <span><?php echo e(trans('plugins/ecommerce::order.delivery')); ?></span>
                                                </div>
                                                <div class="flexbox-auto-left">
                                                    <div class="item">
                                                        <button class="btn btn-primary btn-trigger-shipment" data-target="<?php echo e(route('orders.get-shipment-form', $order->id)); ?>"><?php echo e(trans('plugins/ecommerce::order.delivery')); ?></button>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php if(!$order->shipment->id): ?>
                                    <div class="shipment-create-wrap hidden"></div>
                                <?php else: ?>
                                    <?php echo $__env->make('plugins/ecommerce::orders.shipment-detail', ['shipment' => $order->shipment], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                        <div class="mt20 mb20">
                            <div>
                                <div class="comment-log ws-nm">
                                    <div class="comment-log-title">
                                        <label class="bold-light m-xs-b hide-print"><?php echo e(trans('plugins/ecommerce::order.history')); ?></label>
                                    </div>
                                    <div class="comment-log-timeline">
                                        <div class="column-left-history ps-relative" id="order-history-wrapper">
                                            <?php $__currentLoopData = $order->histories()->orderBy('id', 'DESC')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="item-card">
                                                    <div class="item-card-body clearfix">
                                                        <div
                                                            class="item comment-log-item comment-log-item-date ui-feed__timeline">
                                                            <div class="ui-feed__item ui-feed__item--message">
                                                                <span
                                                                    class="ui-feed__marker <?php if($history->user_id): ?> ui-feed__marker--user-action <?php endif; ?>"></span>
                                                                <div class="ui-feed__message">
                                                                    <div class="timeline__message-container">
                                                                        <div class="timeline__inner-message">
                                                                            <?php if(in_array($history->action, ['confirm_payment', 'refund'])): ?>
                                                                                <a href="#" class="text-no-bold show-timeline-dropdown hover-underline" data-target="#history-line-<?php echo e($history->id); ?>">
                                                                                    <span><?php echo e(OrderHelper::processHistoryVariables($history)); ?></span>
                                                                                </a>
                                                                            <?php else: ?>
                                                                                <span><?php echo e(OrderHelper::processHistoryVariables($history)); ?></span>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                        <time class="timeline__time">
                                                                            <span><?php echo e($history->created_at); ?></span>
                                                                        </time>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php if($history->action == 'refund' && Arr::get($history->extras, 'amount', 0) > 0): ?>
                                                                <div class="timeline-dropdown"
                                                                     id="history-line-<?php echo e($history->id); ?>">
                                                                    <table>
                                                                        <tbody>
                                                                        <tr>
                                                                            <th><?php echo e(trans('plugins/ecommerce::order.order_number')); ?></th>
                                                                            <td>
                                                                                <a href="<?php echo e(route('orders.edit', $order->id)); ?>" title="<?php echo e($order->code); ?>"><?php echo e($order->code); ?></a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th><?php echo e(trans('plugins/ecommerce::order.description')); ?></th>
                                                                            <td><?php echo e($history->description . ' ' . trans('plugins/ecommerce::order.from') . ' ' . $order->payment->payment_channel->label()); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th><?php echo e(trans('plugins/ecommerce::order.amount')); ?></th>
                                                                            <td><?php echo e(format_price(Arr::get($history->extras, 'amount', 0))); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th><?php echo e(trans('plugins/ecommerce::order.status')); ?></th>
                                                                            <td><?php echo e(trans('plugins/ecommerce::order.successfully')); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th><?php echo e(trans('plugins/ecommerce::order.transaction_type')); ?></th>
                                                                            <td><?php echo e(trans('plugins/ecommerce::order.refund')); ?></td>
                                                                        </tr>
                                                                        <?php if($history->user->name): ?>
                                                                            <tr>
                                                                                <th><?php echo e(trans('plugins/ecommerce::order.staff')); ?></th>
                                                                                <td><?php echo e($history->user->name ?: trans('plugins/ecommerce::order.n_a')); ?></td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <tr>
                                                                            <th><?php echo e(trans('plugins/ecommerce::order.refund_date')); ?></th>
                                                                            <td><?php echo e($history->created_at); ?></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            <?php endif; ?>
                                                            <?php if(is_plugin_active('payment') && $history->action == 'confirm_payment' && $order->payment): ?>
                                                                <div class="timeline-dropdown"
                                                                     id="history-line-<?php echo e($history->id); ?>">
                                                                    <table>
                                                                        <tbody>
                                                                        <tr>
                                                                            <th><?php echo e(trans('plugins/ecommerce::order.order_number')); ?></th>
                                                                            <td>
                                                                                <a href="<?php echo e(route('orders.edit', $order->id)); ?>" title="<?php echo e($order->code); ?>"><?php echo e($order->code); ?></a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th><?php echo e(trans('plugins/ecommerce::order.description')); ?></th>
                                                                            <td><?php echo trans('plugins/ecommerce::order.mark_payment_as_confirmed', ['method' => $order->payment->payment_channel->label()]); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th><?php echo e(trans('plugins/ecommerce::order.transaction_amount')); ?></th>
                                                                            <td><?php echo e(format_price($order->payment->amount)); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th><?php echo e(trans('plugins/ecommerce::order.payment_gateway')); ?></th>
                                                                            <td><?php echo e($order->payment->payment_channel->label()); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th><?php echo e(trans('plugins/ecommerce::order.status')); ?></th>
                                                                            <td><?php echo e(trans('plugins/ecommerce::order.successfully')); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th><?php echo e(trans('plugins/ecommerce::order.transaction_type')); ?></th>
                                                                            <td><?php echo e(trans('plugins/ecommerce::order.confirm')); ?></td>
                                                                        </tr>
                                                                        <?php if($history->user->name): ?>
                                                                            <tr>
                                                                                <th><?php echo e(trans('plugins/ecommerce::order.staff')); ?></th>
                                                                                <td><?php echo e($history->user->name ?: trans('plugins/ecommerce::order.n_a')); ?></td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <tr>
                                                                            <th><?php echo e(trans('plugins/ecommerce::order.payment_date')); ?></th>
                                                                            <td><?php echo e($history->created_at); ?></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            <?php endif; ?>
                                                            <?php if($history->action == 'send_order_confirmation_email'): ?>
                                                                <div class="ui-feed__item ui-feed__item--action">
                                                                    <span class="ui-feed__spacer"></span>
                                                                    <div class="timeline__action-group">
                                                                        <a href="#" class="btn hide-print timeline__action-button hover-underline btn-trigger-resend-order-confirmation-modal" data-action="<?php echo e(route('orders.send-order-confirmation-email', $history->order_id)); ?>"><?php echo e(trans('plugins/ecommerce::order.resend')); ?></a>
                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="flexbox-layout-section-secondary mt20">
                    <div class="ui-layout__item">
                        <div class="wrapper-content mb20">
                            <div class="next-card-section p-none-b">
                                <div class="flexbox-grid-default flexbox-align-items-center">
                                    <div class="flexbox-auto-content-left">
                                        <label class="title-product-main text-no-bold"><?php echo e(trans('plugins/ecommerce::order.customer_label')); ?></label>
                                    </div>
                                    <div class="flexbox-auto-left">
                                        <img class="width-30-px radius-cycle" width="40" src="<?php echo e($order->user->id ? $order->user->avatar_url : $order->address->avatar_url); ?>" alt="<?php echo e($order->address->name); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="next-card-section border-none-t">
                                <div class="mb5">
                                    <strong class="text-capitalize"><?php echo e($order->user->name ?: $order->address->name); ?></strong>
                                </div>
                                <?php if($order->user->id): ?>
                                    <div>
                                        <i class="fas fa-inbox mr5"></i><span><?php echo e($order->user->orders()->count()); ?></span> <?php echo e(trans('plugins/ecommerce::order.orders')); ?>

                                    </div>
                                <?php endif; ?>
                                <ul class="ws-nm text-infor-subdued">
                                    <li class="overflow-ellipsis">
                                        <a class="hover-underline" href="mailto:<?php echo e($order->user->email ?: $order->address->email); ?>"><?php echo e($order->user->email ?: $order->address->email); ?></a>
                                    </li>
                                    <?php if($order->user->id): ?>
                                        <li>
                                            <div><?php echo e(trans('plugins/ecommerce::order.have_an_account_already')); ?></div>
                                        </li>
                                    <?php else: ?>
                                        <li>
                                            <div><?php echo e(trans('plugins/ecommerce::order.dont_have_an_account_yet')); ?></div>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <div class="next-card-section">
                                <?php if(EcommerceHelper::countDigitalProducts($order->products) != $order->products->count()): ?>
                                    <div class="flexbox-grid-default flexbox-align-items-center">
                                        <div class="flexbox-auto-content-left">
                                            <label class="title-text-second"><strong><?php echo e(trans('plugins/ecommerce::order.shipping_address')); ?></strong></label>
                                        </div>
                                        <?php if($order->status != \Botble\Ecommerce\Enums\OrderStatusEnum::CANCELED): ?>
                                            <div class="flexbox-auto-content-right text-end">
                                                <a href="#" class="btn-trigger-update-shipping-address">
                                                <span data-placement="top" data-bs-toggle="tooltip" data-bs-original-title="<?php echo e(trans('plugins/ecommerce::order.update_address')); ?>">
                                                    <svg class="svg-next-icon svg-next-icon-size-12">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55.25 55.25"><path d="M52.618,2.631c-3.51-3.508-9.219-3.508-12.729,0L3.827,38.693C3.81,38.71,3.8,38.731,3.785,38.749  c-0.021,0.024-0.039,0.05-0.058,0.076c-0.053,0.074-0.094,0.153-0.125,0.239c-0.009,0.026-0.022,0.049-0.029,0.075  c-0.003,0.01-0.009,0.02-0.012,0.03l-3.535,14.85c-0.016,0.067-0.02,0.135-0.022,0.202C0.004,54.234,0,54.246,0,54.259  c0.001,0.114,0.026,0.225,0.065,0.332c0.009,0.025,0.019,0.047,0.03,0.071c0.049,0.107,0.11,0.21,0.196,0.296  c0.095,0.095,0.207,0.168,0.328,0.218c0.121,0.05,0.25,0.075,0.379,0.075c0.077,0,0.155-0.009,0.231-0.027l14.85-3.535  c0.027-0.006,0.051-0.021,0.077-0.03c0.034-0.011,0.066-0.024,0.099-0.039c0.072-0.033,0.139-0.074,0.201-0.123  c0.024-0.019,0.049-0.033,0.072-0.054c0.008-0.008,0.018-0.012,0.026-0.02l36.063-36.063C56.127,11.85,56.127,6.14,52.618,2.631z   M51.204,4.045c2.488,2.489,2.7,6.397,0.65,9.137l-9.787-9.787C44.808,1.345,48.716,1.557,51.204,4.045z M46.254,18.895l-9.9-9.9  l1.414-1.414l9.9,9.9L46.254,18.895z M4.961,50.288c-0.391-0.391-1.023-0.391-1.414,0L2.79,51.045l2.554-10.728l4.422-0.491  l-0.569,5.122c-0.004,0.038,0.01,0.073,0.01,0.11c0,0.038-0.014,0.072-0.01,0.11c0.004,0.033,0.021,0.06,0.028,0.092  c0.012,0.058,0.029,0.111,0.05,0.165c0.026,0.065,0.057,0.124,0.095,0.181c0.031,0.046,0.062,0.087,0.1,0.127  c0.048,0.051,0.1,0.094,0.157,0.134c0.045,0.031,0.088,0.06,0.138,0.084C9.831,45.982,9.9,46,9.972,46.017  c0.038,0.009,0.069,0.03,0.108,0.035c0.036,0.004,0.072,0.006,0.109,0.006c0,0,0.001,0,0.001,0c0,0,0.001,0,0.001,0h0.001  c0,0,0.001,0,0.001,0c0.036,0,0.073-0.002,0.109-0.006l5.122-0.569l-0.491,4.422L4.204,52.459l0.757-0.757  C5.351,51.312,5.351,50.679,4.961,50.288z M17.511,44.809L39.889,22.43c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0  L16.097,43.395l-4.773,0.53l0.53-4.773l22.38-22.378c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0L10.44,37.738  l-3.183,0.354L34.94,10.409l9.9,9.9L17.157,47.992L17.511,44.809z M49.082,16.067l-9.9-9.9l1.415-1.415l9.9,9.9L49.082,16.067z" /></svg>
                                                    </svg>
                                                </span>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div>
                                        <ul class="ws-nm text-infor-subdued shipping-address-info">
                                            <?php echo $__env->make('plugins/ecommerce::orders.shipping-address.detail', ['address' => $order->shippingAddress], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>

                                <?php if(EcommerceHelper::isBillingAddressEnabled() && $order->billingAddress->id && $order->billingAddress->id != $order->shippingAddress->id): ?>
                                    <div class="flexbox-grid-default flexbox-align-items-center">
                                        <div class="flexbox-auto-content-left">
                                            <label class="title-text-second"><strong><?php echo e(trans('plugins/ecommerce::order.billing_address')); ?></strong></label>
                                        </div>
                                    </div>
                                    <div>
                                        <ul class="ws-nm text-infor-subdued shipping-address-info">
                                            <?php echo $__env->make('plugins/ecommerce::orders.shipping-address.detail', ['address' => $order->billingAddress], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php if($order->referral()->count()): ?>
                                <div class="next-card-section">
                                    <div class="flexbox-grid-default flexbox-align-items-center mb-2">
                                        <div class="flexbox-auto-content-left">
                                            <label class="title-text-second"><strong><?php echo e(trans('plugins/ecommerce::order.referral')); ?></strong></label>
                                        </div>
                                    </div>
                                    <div>
                                        <ul class="ws-nm text-infor-subdued">
                                            <?php $__currentLoopData = ['ip',
                                                'landing_domain',
                                                'landing_page',
                                                'landing_params',
                                                'referral',
                                                'gclid',
                                                'fclid',
                                                'utm_source',
                                                'utm_campaign',
                                                'utm_medium',
                                                'utm_term',
                                                'utm_content',
                                                'referrer_url',
                                                'referrer_domain']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($order->referral->{$field}): ?>
                                                    <li><?php echo e(trans('plugins/ecommerce::order.referral_data.' . $field)); ?>: <strong style="word-break: break-all"><?php echo e($order->referral->{$field}); ?></strong></li>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php if(is_plugin_active('marketplace') && $order->store->name): ?>
                            <div class="wrapper-content bg-gray-white mb20">
                                <div class="pd-all-20">
                                    <div class="p-b10">
                                        <strong><?php echo e(trans('plugins/marketplace::store.store')); ?></strong>
                                        <ul class="p-sm-r mb-0">
                                            <li class="ws-nm">
                                                <a href="<?php echo e($order->store->url); ?>" class="ww-bw text-no-bold" target="_blank"><?php echo e($order->store->name); ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="wrapper-content bg-gray-white mb20">
                            <div class="pd-all-20">
                                <a href="<?php echo e(route('orders.reorder', ['order_id' => $order->id])); ?>" class="btn btn-info"><?php echo e(trans('plugins/ecommerce::order.reorder')); ?></a>&nbsp;
                                <?php if($order->canBeCanceledByAdmin()): ?>
                                    <a href="#" class="btn btn-secondary btn-trigger-cancel-order" data-target="<?php echo e(route('orders.cancel', $order->id)); ?>"><?php echo e(trans('plugins/ecommerce::order.cancel')); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if($order->status != \Botble\Ecommerce\Enums\OrderStatusEnum::CANCELED): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4adee881124d59d5169d70c32aadeace::modal','data' => ['id' => 'resend-order-confirmation-email-modal','title' => trans('plugins/ecommerce::order.resend_order_confirmation'),'buttonId' => 'confirm-resend-confirmation-email-button','buttonLabel' => trans('plugins/ecommerce::order.send')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-base::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'resend-order-confirmation-email-modal','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::order.resend_order_confirmation')),'button-id' => 'confirm-resend-confirmation-email-button','button-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::order.send'))]); ?>
                <?php echo trans('plugins/ecommerce::order.resend_order_confirmation_description', ['email' => $order->user->id ? $order->user->email : $order->address->email]); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4adee881124d59d5169d70c32aadeace::modal','data' => ['id' => 'cancel-shipment-modal','title' => trans('plugins/ecommerce::order.cancel_shipping_confirmation'),'buttonId' => 'confirm-cancel-shipment-button','buttonLabel' => trans('plugins/ecommerce::order.confirm')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-base::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'cancel-shipment-modal','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::order.cancel_shipping_confirmation')),'button-id' => 'confirm-cancel-shipment-button','button-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::order.confirm'))]); ?>
                <?php echo trans('plugins/ecommerce::order.cancel_shipping_confirmation_description'); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4adee881124d59d5169d70c32aadeace::modal','data' => ['id' => 'update-shipping-address-modal','title' => trans('plugins/ecommerce::order.update_address'),'buttonId' => 'confirm-update-shipping-address-button','buttonLabel' => trans('plugins/ecommerce::order.update'),'size' => 'md']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-base::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'update-shipping-address-modal','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::order.update_address')),'button-id' => 'confirm-update-shipping-address-button','button-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::order.update')),'size' => 'md']); ?>
                <?php echo $__env->make('plugins/ecommerce::orders.shipping-address.form', ['address' => $order->address, 'orderId' => $order->id, 'url' => route('orders.update-shipping-address', $order->address->id ?? 0)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4adee881124d59d5169d70c32aadeace::modal','data' => ['id' => 'cancel-order-modal','title' => trans('plugins/ecommerce::order.cancel_order_confirmation'),'buttonId' => 'confirm-cancel-order-button','buttonLabel' => trans('plugins/ecommerce::order.cancel_order')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-base::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'cancel-order-modal','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::order.cancel_order_confirmation')),'button-id' => 'confirm-cancel-order-button','button-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::order.cancel_order'))]); ?>
                <?php echo trans('plugins/ecommerce::order.cancel_order_confirmation_description'); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

            <?php if(is_plugin_active('payment')): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4adee881124d59d5169d70c32aadeace::modal','data' => ['id' => 'confirm-payment-modal','title' => trans('plugins/ecommerce::order.confirm_payment'),'buttonId' => 'confirm-payment-order-button','buttonLabel' => trans('plugins/ecommerce::order.confirm_payment')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-base::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'confirm-payment-modal','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::order.confirm_payment')),'button-id' => 'confirm-payment-order-button','button-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::order.confirm_payment'))]); ?>
                    <?php echo trans('plugins/ecommerce::order.confirm_payment_confirmation_description', ['method' => $order->payment->payment_channel->label()]); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4adee881124d59d5169d70c32aadeace::modal','data' => ['id' => 'confirm-refund-modal','title' => trans('plugins/ecommerce::order.refund'),'buttonId' => 'confirm-refund-payment-button','buttonLabel' => ''.e(trans('plugins/ecommerce::order.confirm_payment')).' <span class=\'refund-amount-text\'>'.e(format_price($order->payment->amount - $order->payment->refunded_amount)).'</span>']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-base::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'confirm-refund-modal','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::order.refund')),'button-id' => 'confirm-refund-payment-button','button-label' => ''.e(trans('plugins/ecommerce::order.confirm_payment')).' <span class=\'refund-amount-text\'>'.e(format_price($order->payment->amount - $order->payment->refunded_amount)).'</span>']); ?>
                    <?php echo $__env->make('plugins/ecommerce::orders.refund.modal', ['order' => $order, 'url' => route('orders.refund', $order->id)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php if($order->shipment && $order->shipment->id): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '4adee881124d59d5169d70c32aadeace::modal','data' => ['id' => 'update-shipping-status-modal','title' => trans('plugins/ecommerce::shipping.update_shipping_status'),'buttonId' => 'confirm-update-shipping-status-button','buttonLabel' => trans('plugins/ecommerce::order.update'),'size' => 'xs']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core-base::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'update-shipping-status-modal','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::shipping.update_shipping_status')),'button-id' => 'confirm-update-shipping-status-button','button-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::order.update')),'size' => 'xs']); ?>
                    <?php echo $__env->make('plugins/ecommerce::orders.shipping-status-modal', ['shipment' => $order->shipment, 'url' => route('ecommerce.shipments.update-status', $order->shipment->id)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(BaseHelper::getAdminMasterLayoutTemplate(), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\work.com\platform/plugins/ecommerce/resources/views/orders/edit.blade.php ENDPATH**/ ?>