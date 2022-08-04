<html>
    <head>
        <title>Laravel Test</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        <div class="container">
        <div class="col"> <h4 align="center">ADMIN DASHBOARD</h4></div>
            <div class="row">
                <div class="col" style="margin:10px;">
                    <a href="zone"><button  class="btn btn-primary btn-lg" type="submit" style="width:100%;">ADD ZONE</button></a>
                </div>
                <div class="col" style="margin:10px;">
                    <a href="region"><button  class="btn btn-primary btn-lg" type="submit" style="width:100%;">ADD REGION</button></a>
                </div>
            </div>

            <div class="row">
                <div class="col" style="margin:10px;">
                    <a href="territory"><button  class="btn btn-primary btn-lg" type="submit" style="width:100%;">ADD TERRITORY</button></a>
                </div>
                <div class="col" style="margin:10px;">
                    <a href="user"><button  class="btn btn-primary btn-lg" type="submit" style="width:100%;">ADD USER</button></a>
                </div>
            </div>

            <div class="row" >
                <div class="col" style="margin:10px;">
                    <a href="product"><button  class="btn btn-primary btn-lg" type="submit" style="width:100%;">ADD SKU</button></a>
                </div>
                <div class="col" style="margin:10px;">
                    <a href="purchaseOrder"><button  class="btn btn-primary btn-lg" type="submit" style="width:100%;">VIEW PURCHASE ORDERS</button></a>
                </div>
            </div>
        </div>
    <body>
</html>