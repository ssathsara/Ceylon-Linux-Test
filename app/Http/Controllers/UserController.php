<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Crypt;
use \Str;
use \Redirect;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $territoryList = \App\Territory::select('territory_code','territory_name')->get();
        return view("user",compact('territoryList'));
  
    }

    protected function viewLogin(){
        return view("login");
  
    }

    protected function login(Request $request){
        $request->validate([
            'user_name' =>'required',
            'password' => 'required',
           
        ]); 
        $user = \App\User::where('user_name',$request->input('user_name'))->get();
        $password = Crypt::decrypt($user[0]->password);
       
        if($password==$request->input('password')){
            // $request->session->put('user',$user[0]->name);
            return redirect('/userDashboard');
        }
        else{
            return Redirect::back()->withErrors("Login credetials are invalid!!!");
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
        $request->validate([
            'name' =>'required',
            'nic' => 'required|unique:users,NIC',
            'address' => 'required',
            'mobile'=> 'required|max:10',
            'territory_code'=> 'required',
            'user_name'=> 'required|unique:users,user_name',
            'password'=> 'required',
        ]);
       
        \App\User::create([ 
            'name' =>$request->input('name'),
            'nic' => $request->input('nic'),
            'address' => $request->input('address'),
            'mobile'=> $request->input('mobile'),
            'email' =>$request->input('email'),
            'gender' =>$request->input('gender'),
            'territory_code'=> $request->input('territory_code'),
            'user_name'=> $request->input('user_name'),
            'password'=> Crypt::encrypt($request->input('password'))]);
        return redirect('/user');
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
