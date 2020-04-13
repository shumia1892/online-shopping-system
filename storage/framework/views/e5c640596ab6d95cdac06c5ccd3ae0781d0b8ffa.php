<?php $__env->startSection('body'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row p-5">
                            <div class="col-md-6">
                                <img src="<?php echo e(asset('/public/front/img/logo.png')); ?>">
                            </div>

                            <div class="col-md-6 text-right">
                                <p class="font-weight-bold mb-1">Invoice #<?php echo e($order->id); ?></p>
                                <p class="text-muted">Due to: <?php echo e($order->updated_at); ?></p>
                            </div>
                        </div>

                        <hr class="my-5">

                        <div class="row pb-5 p-5">
                            <div class="col-md-6">
                                <p class="font-weight-bold mb-4">Customer Information</p>
                                <h6><?php echo e($shipping->full_name); ?></h6>
                                <h6><?php echo e($shipping->phone_no); ?></h6>
                                <h6><?php echo e($shipping->email_address); ?></h6>
                                <h6><?php echo e($shipping->address); ?></h6>
                            </div>

                            <div class="col-md-6 text-right">
                                <p class="font-weight-bold mb-4">Payment Details</p>
                                <p class="mb-1"><span class="text-muted">Payment Type: </span> <?php echo e($payment->payment_type); ?></p>
                                <p class="mb-1"><span class="text-muted">Name: </span><?php echo e($shipping->full_name); ?></p>
                            </div>
                        </div>

                        <div class="row p-5">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Item</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Quantity</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Unit Cost</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php ($i = 1); ?>
                                    <?php $__currentLoopData = $orderDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($i++); ?></td>
                                        <td><?php echo e($orderDetail->product_name); ?></td>
                                        <td><?php echo e($orderDetail->product_qty); ?></td>
                                        <td>TK. <?php echo e($orderDetail->product_price); ?></td>
                                        <td>TK. <?php echo e($total = $orderDetail->product_price * $orderDetail->product_qty); ?></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="d-flex flex-row-reverse bg-dark text-white p-4 ">
                            <div class="py-3 px-5 text-right">
                                <div class="mb-2">Grant Total</div>
                                <div class="h2 font-weight-light">TK. <?php echo e($total+$del = 50); ?></div>
                            </div>

                            <div class="py-3 px-5 text-right">
                                <div class="mb-2">Delivery Charge</div>
                                <div class="h2 font-weight-light">TK. <?php echo e($del= 50); ?></div>
                            </div>

                            <div class="py-3 px-5 text-right">
                                <div class="mb-2">Sub - Total amount</div>
                                <div class="h2 font-weight-light">TK. <?php echo e($total); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>