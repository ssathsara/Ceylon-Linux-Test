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
            <div class="col-sm-9"> <h4 align="center">ADD TERRITORY</h4></div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            <div class="d-flex justify-content-center">
            <form action="storeTerritory" method="POST">
                @csrf
                <div class="row">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Zone</label>
                        <div class="col-sm-4">
                            <select id="zone" class="form-control input-sm" name="zone_code">
                                <option value="" disabled selected hidden>Select</option>
                                @foreach($zoneList  as $zoneList)
                                    <option value="{{$zoneList->zone_code}}">{{$zoneList->long_desc}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Region</label>
                        <div class="col-sm-4">
                            <select id="region" class="form-control input-sm" name="region_code">
                                <option value="" disabled selected hidden>Select</option>
                                @foreach($regionList  as $regionList)
                                    <option value="{{$regionList->region_code}}">{{$regionList->region_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row" > 
                        <label class="col-sm-4 col-form-label">Territory code</label>
                        <div class="col-sm-3"><input type="text" class="form-control" name="" id="" placeholder="Automatic"  disabled></div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Territory name</label>
                        <div class="col-sm-4"><input type="text" class="form-control" name="territory_name" id="territory_name" placeholder="EX:TERRITORY1"></div>
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


