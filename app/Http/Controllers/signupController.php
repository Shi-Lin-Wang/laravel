<?php

namespace App\Http\Controllers;

use App\sign_up;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class signupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('register');
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
        $this->validate(request(), [
            'account' => 'required',
            'password' => 'required',
            'myname' => 'required',
            'email' => 'required',
            'phone' => 'required'


        ]);
            //建立用戶並將其保存到資料庫
        //$user = User::create(request(['name', 'email', 'password']));
        //$data=$request->all;
        //$request->password= Hash::make($data['password']);
       /* $request->user()->fill([
            'password' => Hash::make($request->newPassword) // Hashing passwords
         ])->save();*/

             sign_up::create([
                'account' => $request['account'],
                 'name' => $request['name'],
                 'phone' => $request['phone'],
                 'email' => $request['email'],
                 'password' => Hash::make($request['password']),
             ]);

        //$account = sign_up::create(request(['account', 'password', 'email','phone',]));
        //auth()->login($user);

        return redirect()->to('/login');
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
