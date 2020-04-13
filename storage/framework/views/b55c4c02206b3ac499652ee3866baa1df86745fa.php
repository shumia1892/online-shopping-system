<?php $__env->startSection('body'); ?>
    <div class="container">
        <?php if(Session::get('message')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo e(Session::get('message')); ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
            <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Order Manage</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead class="bg-gradient-success text-white">
                                <tr>
                                    <th>S1</th>
                                    <th>Customer Name</th>
                                    <th>Order Total</th>
                                    <th>Order Date</th>
                                    <th>Order Status</th>
                                    <th>Payment type</th>
                                    <th>Payment Status</th>
                                    <th >Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php ($i = 1); ?>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($i++); ?></td>
                                        <td><?php echo e($order->first_name.' '.$order->last_name); ?></td>
                                        <td><?php echo e($order->order_total); ?></td>
                                        <td><?php echo e($order->created_at); ?></td>
                                        <td><?php echo e($order->order_status); ?></td>
                                        <td><?php echo e($order->payment_type); ?></td>
                                        <td><?php echo e($order->payment_status); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('view-order-detail', ['id' =>$order->id])); ?>" class="btn btn-sm btn-info">
                                                <i class="fas fa-search-plus" title="View Order Details"></i>
                                            </a>
                                            <a href="<?php echo e(route('view-order-invoice', ['id' =>$order->id])); ?>" class="btn btn-sm btn-warning">
                                                <i class="fas fa-search-minus" title="View Order invoice"></i>
                                            </a>
                                            <a href="<?php echo e(route('download-order-invoice', ['id' =>$order->id])); ?>" class="btn btn-sm btn-primary">
                                                <i class="fas fa-download" title="Download Order"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-success">
                                                <i class="fas fa-user-edit" title="Edit Order"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash-alt" title="Delete Order"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>