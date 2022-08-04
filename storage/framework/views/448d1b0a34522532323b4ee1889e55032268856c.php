<html>
    <head>
        <title>Laravel Test</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/main.css">

        <script>
           
            function  get_total(id) {
              
                var id_qty ="qty"+id;
                var qty = parseFloat(document.getElementById(id_qty).value);
                document.getElementById("units"+id).value = qty;
                get_total_price(id);
            }

            function get_total_price(id){
                var id_unit = "unit_price"+id;
                var unit_price = parseFloat(document.getElementById(id_unit).value);
                var id_qty ="qty"+id;
                if (isNaN(unit_price)) unit_price = 0;
                var qty = parseFloat(document.getElementById(id_qty).value);
                if (isNaN(qty)) qty = 0;
                var result = unit_price * qty;
                document.getElementById("total_price"+id).value = result;
                
            }
        </script>
    </head>
    <body>
        <div class="container">
           
            <div class="col-sm-9"> <h4 class="d-flex justify-content-center">ADD INDIVIDUAL PURCHASE ORDER</h4></div>
            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div><br />
            <?php endif; ?>
          
            <div class="row">
                <form action="storeIndividualPurchase"  method="POST" class="form-inline" >
                    <?php echo csrf_field(); ?>
                    <div class="form-group row"   >
                        <label class="col-sm-1 col-form-label">Zone</label>
                        <div class="col-sm-2">
                            <select id="zone" class="form-control input-sm" name="zone_code">
                                <option value="" disabled selected hidden>Select</option>
                                <?php $__currentLoopData = $zoneList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zoneList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($zoneList->zone_code); ?>"><?php echo e($zoneList->long_desc); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>  
                    
                        <label class="col-sm-1 col-form-label">Region</label>
                        <div class="col-sm-2">
                            <select id="region" class="form-control" name="region_code">
                                <option value="" disabled selected hidden>Select</option>
                                <?php $__currentLoopData = $regionList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $regionList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($regionList->region_code); ?>"><?php echo e($regionList->region_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <label class="col-sm-1 col-form-label">Territory</label>
                        <div class="col-sm-2">
                            <select id="territory" class="form-control" name="territory_code">
                                <option value="" disabled selected hidden>Select</option>
                                <?php $__currentLoopData = $territoryList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $territoryList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($territoryList->territory_code); ?>"><?php echo e($territoryList->territory_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <label class="col-sm-1 col-form-label">Distributor</label>
                        <div class="col-sm-2">
                            <select id="user" class="form-control" name="user">
                                <option value="" disabled selected hidden>Select</option>
                                <?php $__currentLoopData = $userList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($userList->id); ?>"><?php echo e($userList->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="d-flex justify-content-center">
                            <label class="col-sm-1 col-form-label">Date </label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="" id="" placeholder="Automatically"  disabled>
                            </div>

                            <label class="col-sm-1 col-form-label">PO No </label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="" id=""  placeholder="Automatically"  disabled>
                            </div>

                            <label class="col-sm-1 col-form-label">Remark </label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="remark" id="remark">
                            </div>
                        </div>
                    </div>
                
                    <table class = "table">
                        
                        <tr>
                        <th> <input type="text" class="form-control"  value="SKU CODE" disabled></th>
                        <th> <input type="text" class="form-control"  value="SKU NAME" disabled></th>
                        <th> <input type="text" class="form-control"  value="UNIT PRICE" disabled></th>
                        <th> <input type="text" class="form-control"  value="AVB QTY" disabled></th>
                        <th> <input type="text" class="form-control"  value="ENTER QTY" disabled></th>
                        <th> <input type="text" class="form-control"  value="UNITS" disabled></th>
                        <th> <input type="text" class="form-control"  value="TOTAL PRICE" disabled></th>
                        <th> <input type="text" class="form-control"  value="ADD TO PURCHASE" disabled></th>
                        </tr>
                        
                        <tbody>
                         
                            <?php $__currentLoopData = $productList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><input type="text" class="form-control" name="sku_id[]" value="<?php echo e($productList->sku_id); ?>"></td>
                                <td><input type="text" class="form-control"  name="sku_name[]"value="<?php echo e($productList->sku_name); ?>"></td>
                                <td><input type="text" class="form-control" name ="unit_price[]" id="unit_price<?php echo e($productList->sku_id); ?>" value="<?php echo e($productList->distributor_price); ?>"></td>
                                <td><input type="text" class="form-control"   value="<?php echo e($productList->amount); ?>"></td>
                                <td><input type="text" class="form-control" id="qty<?php echo e($productList->sku_id); ?>" placeholder="Type..." onkeyup="get_total('<?php echo e($productList->sku_id); ?>')"></td>
                                <td><input type="text" class="form-control"  name="qty[]" value="" id="units<?php echo e($productList->sku_id); ?>"></td>
                                <td><input type="text" class="form-control"  name= "total_price[]" value=" " id="total_price<?php echo e($productList->sku_id); ?>"></td>
                                <td><input type="checkbox" class="form-check-input" id="select" name="select[]" value="<?php echo e($productList->sku_id); ?>"></td>
                            
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-4"><button class="btn btn-success" >ADD PO</button></div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>


<?php /**PATH C:\xampp\htdocs\laravel_test\resources\views/individualPurchaceOrder.blade.php ENDPATH**/ ?>