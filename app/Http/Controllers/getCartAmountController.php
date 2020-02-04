<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class getCartAmountController extends Controller
{
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
  //包含解token的部分及資料庫的部分

  $DBname = "wtlab108";
  $DBhost = "127.0.0.1";
  $DBuser = 'root';
  $DBpass = '';
	$conn = mysqli_connect($DBhost, $DBuser, $DBpass) ;//連接資料庫
	mysqli_query($conn,"SET NAMES utf8");
	mysqli_select_db($conn,$DBname);
	header('Content-Type: application/json;charset=utf-8');

  //建立一個用來放回傳資料的陣列
	$return_arr = array();

  //直接從token抓用戶名稱

  //這邊傳入verifyToken的方法verifyToken 和getToken 去尋找token內部的值username 和time

  $acc=Auth::user();  //將data內的username取出放入acc

  //從資料庫獲得資料
  //抓購物車內的商品種類數目
  $sql = "SELECT count(*) as num FROM `cart_product` Where `customer`='$acc'";
  $result = mysqli_query($conn, $sql);

  //這邊將抓到的資料放入陣列
  while ($row = mysqli_fetch_array($result,MYSQLI_NUM)) {

    $row_array = $row;
    array_push($return_arr,$row_array);
  }

  //回傳json形式
  echo json_encode($return_arr);

  mysqli_free_result($result);
  mysqli_close($conn);


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
