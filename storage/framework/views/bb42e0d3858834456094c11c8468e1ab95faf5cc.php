<html>
    <head>
        <title>Laravel Test</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        <div class="container">
           
            <div class="col-sm-9"> <h4 align="center">ADD USERS</h4></div>
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
            <form action="storeUser" method="POST">
                <?php echo csrf_field(); ?>
                <div class="row">
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Name<span>*</span></label>
                        <div class="col-sm-2"><input type="text" class="form-control" name="name" id="name"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">NIC<span>*</span></label>
                        <div class="col-sm-3"><input type="text" class="form-control" name="nic" id="nic"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Address<span>*</span></label>
                        <div class="col-sm-4"><input type="text" class="form-control" name="address" id="address"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Mobile<span>*</span></label>
                        <div class="col-sm-3"><input type="text" class="form-control" name="mobile" id="mobile"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-3"><input type="text" class="form-control" name="email" id="email"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Gender</label>
                        <div class="col-sm-2">
                            <select name="gender" id="gender" class="form-control input-sm">
                                <option value="" disabled selected hidden>Select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Territory<span>*</span></label>
                        <div class="col-sm-2">
                            <select id="territory" class="form-control input-sm" name="territory_code">
                                <option value="" disabled selected hidden>Select</option>
                                <?php $__currentLoopData = $territoryList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $territoryList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($territoryList->territory_code); ?>"><?php echo e($territoryList->territory_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row" > 
                        <label class="col-sm-4 col-form-label">User name<span>*</span></label>
                        <div class="col-sm-2"><input type="text" class="form-control" name="user_name" id="user_name"></div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Password<span>*</span></label>
                        <div class="col-sm-2"><input type="password" class="form-control" name="password" id="password"></div>
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


<?php /**PATH C:\xampp\htdocs\laravel_test\resources\views/user.blade.php ENDPATH**/ ?>