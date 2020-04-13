<div class="modal fade" id="edit<?php echo e($product->id); ?>">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('update-product',$product->id)); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label >Product Name</label>
                        <input type="text" class="form-control" value="<?php echo e($product->product_name); ?>" name="product_name" >
                        <input type="hidden" class="form-control" value="<?php echo e($product->id); ?>" name="product_id">
                    </div>
                    <div class="form-group">
                        <label >Category Name</label>
                        <select name="cat_id" class="form-control">
                            <option>---Select Category---</option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php if($product->cat_id==$category->id): ?> selected <?php endif; ?> value="<?php echo e($category->id); ?>"><?php echo e($category->cat_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label >Brand Name</label>
                        <select name="brand_id" class="form-control">
                            <option>---Select Brand---</option>
                            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option  <?php if($product->brand_id==$brand->id): ?> selected <?php endif; ?> value="<?php echo e($brand->id); ?>"><?php echo e($brand->brand_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label >Product Price</label>
                        <input type="text" class="form-control" value="<?php echo e($product->product_price); ?>" name="product_price" >
                    </div>
                    <div class="form-group">
                        <label >Product Short Description</label>
                        <input type="text" class="form-control" value="<?php echo e($product->short_desc); ?>" name="short_desc" >
                    </div>
                    <div class="form-group">
                        <label >Product Long Description</label>
                        <input type="text" class="form-control" value="<?php echo e($product->long_desc); ?>" name="long_desc" >
                    </div>
                    <div class="form-group">
                        <label >Main image</label>
                        <input type="file" class="form-control-file"  name="main_image" >
                        <img src="<?php echo e(asset($product->main_image)); ?>" width="80">
                    </div>
                    <div class="form-group">
                        <label >Product Size</label>
                        <select name="product_size" class="form-control">
                            <option>---Select Product Size---</option>
                            <option  <?php if($product->product_size): ?> selected <?php endif; ?> value="<?php echo e($product->id); ?>"><?php echo e($product->product_size); ?></option>
                            <option value="xxl">XXL</option>
                            <option value="xl">XL</option>
                            <option value="l">L</option>
                            <option value="m">M</option>
                            <option value="s">S</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label >Product Quantity</label>
                        <input type="number" class="form-control" value="<?php echo e($product->product_qty); ?>" name="product_qty" >
                    </div>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" name="btn" class="btn btn-primary">Update product</button>
                   </div>
                </form>
            </div>
        </div>
    </div>
</div>


