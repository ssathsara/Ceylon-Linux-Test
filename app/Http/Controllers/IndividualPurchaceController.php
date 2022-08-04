<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class IndividualPurchaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $territoryList = \App\Territory::select('territory_code','territory_name')->get();
        $zoneList = \App\Zone::select('zone_code','long_desc')->get();
        $regionList = \App\Region::select('region_code','region_name')->get();
        $userList = \App\User::select('id','name')->get();
        $productList = \App\Product::select('sku_id','sku_name','distributor_price','amount')->get();
        return view("individualPurchaceOrder",compact(['zoneList','regionList','territoryList','userList','productList']));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'zone_code' =>'required',
            'region_code' => 'required',
            'user' =>'required',
            'territory_code' => 'required'
        ]);
        
        $json        = $request->all();
        $data        = $json;

        $finalData = array();
        $blankArr = array();
        $selected_items = array();

        $selected_items = $request->input('select');
       
        if(isset($data["zone_code"])){
        array_push($blankArr, $data);
        }else{
        $blankArr = $data;
        } 
        $currentDate = Carbon::now();
        $date  = $currentDate->format('Y-m-d H:i:s');
        foreach ($blankArr as $key => $value)
        {
            $zone_code     = $value['zone_code'];
            $region_code    = $value['region_code'];
            $user     = $value['user'];
            $territory_code    = $value['territory_code'];
            $remark    = $value['remark'];
            
            foreach($value['sku_id'] as $k => $v){
                if(in_array($v,$selected_items)){
                    $qty      = $value['qty'][$k];
                    $total_price      = $value['total_price'][$k];
            
                    $finalData = array(
                        'zone'=> $zone_code,
                        'region'=> $region_code,
                        'territory' =>$territory_code,
                        'distributor'=> $user,
                        'date' => $date,
                        'remark' => $remark,
                        'sku_code'=> $v,
                        'qty' => $qty,
                        'total_price'=>$total_price
                    );
                    
                    \App\PurchasedOrder::create($finalData);
                }
            } 
        }

    
        return redirect('/individualPurchase');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
