<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\User;
use App\sign_up;
use DB;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
     use AuthenticatesUsers;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        return view('index');
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
       // $query=DB::table('account');
        //$query=select('account', 'password');
        //$query = App\sign_up::select('price', '>', '100'); // 取得price>100的products
       //$account = $request->input('account');
        //$password = $request->input('password');
        $input = Input::all();

        if (Auth::attempt(['account' => $input['account'], 'password' => $input['password']]))
        {

            $user = Auth::user();
           // return $user;
            return  view('chooseShop');
        }
        else
        {
            return view('index');
        }/*
        /*if (auth::attempt(request(['account', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The name or password is incorrect, please try again'
            ]);
        }



            return redirect()->to('/');
    //connect to database
/*$account = $_POST['account'];
    $password = $_POST['password'];
    echo   $account;
      echo   $password;
    if(checkAccount($account,$password,null)){
        packageToken($account);
        //PHP 建立cookie的方法
        //setcookie("名字","值","到期時間","cookie適用的路徑(/代表整個網域都可以用)",網域,secure(Cookie只能透過https的方式傳輸),httpOnly(Cookie只限被伺服端存取，無法在用戶端讀取))
        setcookie("failToLogin",null,time()-360000,"/","127.0.0.1");
		header("Location:https://127.0.0.1/wtlab108/testChing/chooseShop.html");
        //到學校改成這個
        //setcookie("failToLogin",null,time()-360000,"/wtlab108","140.127.74.168");
        //header("Location:browserProductsinsert.html");
    }else{
        $failToLogin = $_COOKIE["failToLogin"];
        $failToLogin += 1;
        setcookie("failToLogin",$failToLogin,time()+(300),"/","127.0.0.1");
        header("Location:https://127.0.0.1/wtlab108/index.html");
        //到學校改成這個
        //setcookie("failToLogin",$failToLogin,time()+(300),"/wtlab108","140.127.74.168");
        //header("Location:http://140.127.74.168/wtlab108/index.html");
    }
    /*if account exist , then
     *1. generate authentication and save in cookie
     *2. header("Location: http://example.com/myOtherPage.php"); where to generate json(data from DB)
     *else direct error message*/











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
    public function destroy()
    {
        //
        Auth::logout();

        return redirect()->to('/login');
    }
}
