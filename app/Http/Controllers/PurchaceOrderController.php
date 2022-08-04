<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PurchaceOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $territoryList = \App\Territory::select('territory_code','territory_name')->get();
        $regionList = \App\Region::select('region_code','region_name')->get();
        $orderList = \App\PurchasedOrder::select('region','territory','distributor','po_no','date','created_at','total_price')->get();
        
        
        return view('purchaseOrder',compact(['regionList','territoryList','orderList']));
    }


    public function search(Request $request){
        
    if($request->ajax()){
        
        $output="";
        $products=DB::table('purchased_orders')->where('po_no',$request->search)->get();
        $wordCount = count($products);
        error_log($wordCount);
        if($products) {
           
            foreach ($products as  $product) {
               
                $output.='<tr>'.
                                '<td><input type="text" class="form-control"  value="'.$product->region.'"></td>'.
                                '<td><input type="text" class="form-control"  value="'.$product->territory.'"></td>'.
                                '<td><input type="text" class="form-control"  value="'.$product->distributor.'"></td>'.
                                '<td><input type="text" class="form-control"  value="'.$product->po_no.'"></td>'.
                                '<td><input type="text" class="form-control"  value="'.$product->date.'"></td>'.
                                '<td><input type="text" class="form-control"  value="'.$product->created_at.'"></td>'.
                                '<td><input type="text" class="form-control"  value="'.$product->total_price.'"></td>'.
                
                '</tr>';
            }
            return Response($output);
            }
        }
    }

    public function searchRegion(Request $request){
        
        if($request->ajax()){
            
            $output="";
            $products=DB::table('purchased_orders')->where('region',$request->search)->get();
            $wordCount = count($products);
            error_log($wordCount);
            if($products) {
               
                foreach ($products as  $product) {
                   
                    $output.='<tr>'.
                                    '<td><input type="text" class="form-control"  value="'.$product->region.'"></td>'.
                                    '<td><input type="text" class="form-control"  value="'.$product->territory.'"></td>'.
                                    '<td><input type="text" class="form-control"  value="'.$product->distributor.'"></td>'.
                                    '<td><input type="text" class="form-control"  value="'.$product->po_no.'"></td>'.
                                    '<td><input type="text" class="form-control"  value="'.$product->date.'"></td>'.
                                    '<td><input type="text" class="form-control"  value="'.$product->created_at.'"></td>'.
                                    '<td><input type="text" class="form-control"  value="'.$product->total_price.'"></td>'.
                    
                    '</tr>';
                }
                return Response($output);
                }
        }
    
    }


    public function searchTerritory(Request $request){
        
        if($request->ajax()){
            
            $output="";
            $products=DB::table('purchased_orders')->where('territory',$request->search)->get();
            $wordCount = count($products);
            error_log($wordCount);
            if($products) {
               
                foreach ($products as  $product) {
                   
                    $output.='<tr>'.
                                    '<td><input type="text" class="form-control"  value="'.$product->region.'"></td>'.
                                    '<td><input type="text" class="form-control"  value="'.$product->territory.'"></td>'.
                                    '<td><input type="text" class="form-control"  value="'.$product->distributor.'"></td>'.
                                    '<td><input type="text" class="form-control"  value="'.$product->po_no.'"></td>'.
                                    '<td><input type="text" class="form-control"  value="'.$product->date.'"></td>'.
                                    '<td><input type="text" class="form-control"  value="'.$product->created_at.'"></td>'.
                                    '<td><input type="text" class="form-control"  value="'.$product->total_price.'"></td>'.
                    
                    '</tr>';
                }
                return Response($output);
                }
        }
    
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
        //
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
