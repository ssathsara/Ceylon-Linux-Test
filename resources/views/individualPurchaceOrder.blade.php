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
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
          
            <div class="row">
                <form action="storeIndividualPurchase"  method="POST" class="form-inline" >
                    @csrf
                    <div class="form-group row"   >
                        <label class="col-sm-1 col-form-label">Zone</label>
                        <div class="col-sm-2">
                            <select id="zone" class="form-control input-sm" name="zone_code">
                                <option value="" disabled selected hidden>Select</option>
                                @foreach($zoneList  as $zoneList)
                                    <option value="{{$zoneList->zone_code}}">{{$zoneList->long_desc}}</option>
                                @endforeach
                            </select>
                        </div>  
                    
                        <label class="col-sm-1 col-form-label">Region</label>
                        <div class="col-sm-2">
                            <select id="region" class="form-control" name="region_code">
                                <option value="" disabled selected hidden>Select</option>
                                @foreach($regionList  as $regionList)
                                    <option value="{{$regionList->region_code}}">{{$regionList->region_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <label class="col-sm-1 col-form-label">Territory</label>
                        <div class="col-sm-2">
                            <select id="territory" class="form-control" name="territory_code">
                                <option value="" disabled selected hidden>Select</option>
                                @foreach($territoryList  as $territoryList)
                                    <option value="{{$territoryList->territory_code}}">{{$territoryList->territory_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <label class="col-sm-1 col-form-label">Distributor</label>
                        <div class="col-sm-2">
                            <select id="user" class="form-control" name="user">
                                <option value="" disabled selected hidden>Select</option>
                                @foreach($userList  as $userList)
                                    <option value="{{$userList->id}}">{{$userList->name}}</option>
                                @endforeach
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
                         
                            @foreach($productList  as $productList)
                            <tr>
                                <td><input type="text" class="form-control" name="sku_id[]" value="{{$productList->sku_id}}"></td>
                                <td><input type="text" class="form-control"  name="sku_name[]"value="{{$productList->sku_name}}"></td>
                                <td><input type="text" class="form-control" name ="unit_price[]" id="unit_price{{$productList->sku_id}}" value="{{$productList->distributor_price}}"></td>
                                <td><input type="text" class="form-control"   value="{{$productList->amount}}"></td>
                                <td><input type="text" class="form-control" id="qty{{$productList->sku_id}}" placeholder="Type..." onkeyup="get_total('{{$productList->sku_id}}')"></td>
                                <td><input type="text" class="form-control"  name="qty[]" value="" id="units{{$productList->sku_id}}"></td>
                                <td><input type="text" class="form-control"  name= "total_price[]" value=" " id="total_price{{$productList->sku_id}}"></td>
                                <td><input type="checkbox" class="form-check-input" id="select" name="select[]" value="{{$productList->sku_id}}"></td>
                            
                            </tr>
                            @endforeach
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


