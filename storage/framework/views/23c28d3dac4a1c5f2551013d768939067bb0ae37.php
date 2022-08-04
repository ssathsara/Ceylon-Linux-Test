<html>
    <head>
        <title>Laravel Test</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
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
                <form action="storeIndividualPurchase"  method="POST" >
                    <?php echo csrf_field(); ?>
                    <div class="form-group row"> 
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Region</label>
                                    <div class="col-sm-8">
                                        <select id="region" class="form-control" name="region_code">
                                            <option value="" disabled selected hidden>Select</option>
                                            <?php $__currentLoopData = $regionList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $regionList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($regionList->region_code); ?>"><?php echo e($regionList->region_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group row" >
                                    <label class="col-sm-4 col-form-label">Territory</label>
                                    <div class="col-sm-8">
                                        <select id="territory" class="form-control" name="territory_code">
                                            <option value="" disabled selected hidden>Select</option>
                                            <?php $__currentLoopData = $territoryList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $territoryList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($territoryList->territory_code); ?>"><?php echo e($territoryList->territory_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>                        
                            </div>
                            <div class="col">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">PO NO</label>
                                    <div class="col-sm-8" >
                                        <input type="text" class="form-control" name="" id="search" placeholder="Type & Search"  >
                                    </div>
                                </div>                     
                            </div>
                            <div class="col">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">FROM</label>
                                    <div class="col-sm-8" >
                                        <input type="date" class="form-control" name="" id="" placeholder="DD/MM/YY"  >
                                    </div>
                                </div>                   
                            </div>
                            <div class="col">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">TO</label>
                                    <div class="col-sm-8" >
                                        <input type="date" class="form-control" name="" id="" placeholder="DD/MM/YY"  >
                                    </div>
                                </div>                   
                            </div>
                        </div>
                    </div>
                    <table class = "table">
                        <thead>
                            <tr>
                            <th> <input type="text" class="form-control"  value="REGION" disabled></th>
                            <th> <input type="text" class="form-control"  value="TERRITORY" disabled></th>
                            <th> <input type="text" class="form-control"  value="DISTRIBUTOR" disabled></th>
                            <th> <input type="text" class="form-control"  value="PO NUMBER" disabled></th>
                            <th> <input type="text" class="form-control"  value="DATE" disabled></th>
                            <th> <input type="text" class="form-control"  value="TIME" disabled></th>
                            <th> <input type="text" class="form-control"  value="TOTAL AMOUNT" disabled></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $orderList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><input type="text" class="form-control"  value="<?php echo e($orderList->region); ?>"></td>
                                <td><input type="text" class="form-control"  value="<?php echo e($orderList->territory); ?>"></td>
                                <td><input type="text" class="form-control"  value="<?php echo e($orderList->distributor); ?>"></td>
                                <td><input type="text" class="form-control"  value="<?php echo e($orderList->po_no); ?>"></td>
                                <td><input type="text" class="form-control"  value="<?php echo e($orderList->date); ?>"></td>
                                <td><input type="text" class="form-control"  value="<?php echo e($orderList->created_at->format('H:i:s')); ?>"></td>
                                <td><input type="text" class="form-control"  value="<?php echo e($orderList->total_price); ?>"></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    
                </form>
            </div>
        </div>
    </body>
</html>

<script type="text/javascript">

    $('#search').on('keyup',function(){
        $value=$(this).val();
        console.log($value);
        $.ajax({
            type : 'get',
            url : '<?php echo e('search'); ?>',
            data:{'search':$value},

        success:function(data){
            $('tbody').html(data);
        }
        });
    })

    $('#region').on('change',function(){
        $value=$(this).val();
        console.log($value);
        $.ajax({
            type : 'get',
            url : '<?php echo e('searchRegion'); ?>',
            data:{'search':$value},

        success:function(data){
            $('tbody').html(data);
        }
        });
    })

    $('#territory').on('change',function(){
        $value=$(this).val();
        console.log($value);
        $.ajax({
            type : 'get',
            url : '<?php echo e('searchTerritory'); ?>',
            data:{'search':$value},

        success:function(data){
            $('tbody').html(data);
        }
        });
    })
</script>

<script type="text/javascript">
$.ajaxSetup({ headers: { 'csrftoken' : '<?php echo e(csrf_token()); ?>' } });
</script><?php /**PATH C:\xampp\htdocs\laravel_test\resources\views/purchaseOrder.blade.php ENDPATH**/ ?>