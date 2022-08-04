<html>
    <head>
        <title>Laravel Test</title>
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
    <div class="container">
     
        <div class="col"> <h4 align="center">ADMIN LOGIN</h4></div>
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
        <form action="adminLogin" method="POST">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="form-group row" > 
                    <label class="col-sm-4 col-form-label">User Name</label>
                    <div class="col-sm-3"><input type="text" class="form-control" name="user_name" id="" ></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-4"><input type="password" class="form-control" name="password" id="password"></div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label"></label>
                    <div class="col-sm-4"><button class="btn btn-success" type="submit">LOGIN</button> </div>
                </div>
            </div>
        </form>
    </div>
    <body>
</html><?php /**PATH C:\xampp\htdocs\laravel_test\resources\views/adminlogin.blade.php ENDPATH**/ ?>