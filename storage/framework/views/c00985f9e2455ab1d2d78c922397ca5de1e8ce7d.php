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
                        <h6 class="m-0 font-weight-bold text-primary">View Brand</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>S1</th>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Product Image</th>
                                    <th>Category Name</th>
                                    <th>Brand Name</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                <tbody>
                                <?php ($i = 1); ?>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($i++); ?></td>
                                        <td><?php echo e($product->product_name); ?></td>
                                        <td><?php echo e($product->product_price); ?></td>
                                        <td><img src="<?php echo e(asset($product->main_image)); ?>" width="80"></td>
                                        <td><?php echo e($product->cat_name); ?></td>
                                        <td><?php echo e($product->brand_name); ?></td>
                                        <td>
                                            <a href=""  class="btn btn-sm btn-warning" data-toggle="modal" data-target="#view<?php echo e($product->id); ?>">
                                                <i class="fas fa-search-plus"></i>
                                            </a>
                                            <a href=""  class="btn btn-sm btn-success" data-toggle="modal" data-target="#edit<?php echo e($product->id); ?>">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="<?php echo e(route('delete-product',['id'=>$product->id])); ?>" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php echo $__env->make('admin.product.view-details', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    <?php echo $__env->make('admin.product.edit-product', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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