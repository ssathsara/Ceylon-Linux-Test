<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Crypt;
use \Redirect;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlogin');
    }

    protected function login(Request $request){
        $request->validate([
            'user_name' =>'required',
            'password' => 'required',
           
        ]); 

        // return Crypt::encrypt("ADMIN");
        $user = \App\Admin::where('user_name',$request->input('user_name'))->get();
        $password = Crypt::decrypt($user[0]->password);
      
        if($password==$request->input('password')){
            return redirect('/adminDashboard');
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
