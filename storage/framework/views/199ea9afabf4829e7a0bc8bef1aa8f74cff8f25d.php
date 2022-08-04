<html>
    <head>
        <title>Laravel Test</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        <div class="container">
           
            <div class="col-sm-9"> <h4 align="center">ADD PRODUCT</h4></div>
            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div><br />
            <?php endif; ?>
            <div class="d-flex justify-content-center">
            <form action="storeProduct" method="POST">
                <?php echo csrf_field(); ?>
                <div class="row">
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">SKU ID</label>
                        <div class="col-sm-2"><input type="text" class="form-control" name="" id="" placeholder="Automatically"  disabled></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">SKU code<span>*</span></label>
                        <div class="col-sm-2"><input type="text" class="form-control" name="sku_code" id="sku_code"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">SKU name<span>*</span></label>
                        <div class="col-sm-3"><input type="text" class="form-control" name="sku_name" id="sku_name" placeholder="Main Product Name/auto"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">MRP<span>*</span></label>
                        <div class="col-sm-1"><input type="text" class="form-control" name="mrp" id="mrp"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Distributor price<span>*</span></label>
                        <div class="col-sm-1"><input type="text" class="form-control" name="distributor_price" id="distributor_price"></div>
                    </div>
                   
                    <div class="form-group row" > 
                        <label class="col-sm-4 col-form-label">Weight/Volume<span>*</span></label>
                        <div class="col-sm-2"><input type="text" class="form-control" name="amount" id="amount"></div>
                        <div class="col-sm-1">
                            <select class="col-sm-2 form-control input-sm" name="type" id="">
                            <option value="" disabled selected hidden></option>
                                <option value="weight">Weight</option>
                                <option value="volume">Volume</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-4"><button class="btn btn-success" >SAVE</button></div>
                    </div>
                </div>
            </form>
    </div>

    </body>
</html>


<?php /**PATH C:\xampp\htdocs\laravel_test\resources\views/product.blade.php ENDPATH**/ ?>