<?php $__env->startSection('body'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h3 class="font-weight-bold text-center">Order info  for this order</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>Order No</th>
                                <td><?php echo e($order->id); ?></td>
                            </tr>
                            <tr>
                                <th>Order Total</th>
                                <td><?php echo e($order->order_total); ?></td>
                            </tr>
                            <tr>
                                <th>Order Status</th>
                                <td><?php echo e($order->order_status); ?></td>
                            </tr>
                            <tr>
                                <th>Order Date</th>
                                <td><?php echo e($order->created_at); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h3 class="font-weight-bold text-center">Customer info  for this order</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                          <tr>
                              <th>Customer Name</th>
                              <td><?php echo e($customer->first_name.' '.$customer->last_name); ?></td>
                          </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td><?php echo e($customer->phone_no); ?></td>
                            </tr>
                            <tr>
                                <th>Email Address</th>
                                <td><?php echo e($customer->email_address); ?></td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td><?php echo e($customer->address); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h3 class="font-weight-bold text-center">Shipping info for this order</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>Full Name</th>
                                <td><?php echo e($shipping->full_name); ?></td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td><?php echo e($shipping->phone_no); ?></td>
                            </tr>
                            <tr>
                                <th>Email Address</th>
                                <td><?php echo e($shipping->email_address); ?></td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td><?php echo e($shipping->address); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h3 class="font-weight-bold text-center">Payment info for this order</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>Payment Type</th>
                                <td><?php echo e($payment->payment_type); ?></td>
                            </tr>
                            <tr>
                                <th>Payment Status</th>
                                <td><?php echo e($payment->payment_status); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h3 class="font-weight-bold text-center">Product Info for this order</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-info">
                            <tr class="font-weight-bold text-white">
                                <th>S1</th>
                                <th>Product Name</th>
                                <th>Product Id</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th >Product Total Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php ($i = 1); ?>
                             <?php $__currentLoopData = $orderDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                   <td><?php echo e($i++); ?></td>
                                    <td><?php echo e($orderDetail->product_id); ?></td>
                                    <td><?php echo e($orderDetail->product_name); ?></td>
                                    <td>TK <?php echo e($orderDetail->product_price); ?></td>
                                    <td><?php echo e($orderDetail->product_qty); ?></td>
                                    <td>TK <?php echo e($orderDetail->product_price * $orderDetail->product_qty); ?></td>
                                </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>