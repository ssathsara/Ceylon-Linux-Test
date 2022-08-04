<html>
    <head>
        <title>Laravel Test</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        <div class="container">
            <div class="d-flex flex-row-reverse">
                <h6 class="upper-right"> Welcome system admin</h6>
            </div>
            <div class="col-sm-9"> <h4 align="center">ADD REGION</h4></div>
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
            <form action="storeRegion" method="POST">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Zone</label>
                        <div class="col-sm-4">
                            <select id="zone" class="form-control input-sm" name="zone_code">
                                <option value="" disabled selected hidden>Select</option>
                                <?php $__currentLoopData = $zoneList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zoneList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($zoneList->zone_code); ?>"><?php echo e($zoneList->long_desc); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row" > 
                        <label class="col-sm-4 col-form-label">Region code</label>
                        <div class="col-sm-3"><input type="text" class="form-control" name="" id="" placeholder="Automatic"  disabled></div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Region name</label>
                        <div class="col-sm-4"><input type="text" class="form-control" name="region_name" id="region_name" placeholder="EX:REGION1"></div>
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


<?php /**PATH C:\xampp\htdocs\laravel_test\resources\views/region.blade.php ENDPATH**/ ?>