<?php
header('Access-Control-Allow-Origin: *');
use App\Register;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::view('/register', 'register')->name('register');
Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');
Route::view('/', 'home')->name('home');
//Route::get('/', function () {
  //  return view('home');
//});
Route::view('/contact', 'contact')->name('contact');
//Route::get('/contact', function () {
  //  return view('contact');
//});
Route::resource('/posts', 'PostController');
Route::get('/login', 'LoginController@create');
Route::post('/login', 'LoginController@store');

Route::get('/browserProduct', 'browserProductController@create');
Route::post('/browserProduct1', 'browserProductController@store');

Route::get('/viewProduct', 'viewProductController@create');
Route::post('/viewProduct1', 'viewProductController@store');
Route::post('/addcart', 'viewProductController@addcart');
Route::get('/cart', 'viewProductController@cart');
Route::get('/getcartDetail', 'viewProductController@getcartDetail');
Route::get('/CartDelete', 'viewProductController@CartDelete');
Route::get('/getOrder', 'viewProductController@getOrder');
Route::get('/viewOrder', 'viewProductController@viewOrder');
Route::get('/CartToOrder', 'viewProductController@CartToOrder');
Route::get('/navSigninCheck', 'viewProductController@navSigninCheck');
Route::post('/getcart', 'getCartAmountController@store');

Route::get('/welcome', function () {
   return view('welcome');



//Route::get('/chooseShop', 'chooseShopController@index')->name('chooseShop');

});
Route::get('/user', function () {
$user = App\Register::all();

foreach ($user as $user) {
    echo $user->name;

}});

Route::get('/user/{id}', function ($id) {
    $user = App\Register::find($id);
    echo  $user->name;
   });


   Route::get('/email/{id}', function ($id) {
    $user = App\Register::find($id);
    echo  $user->email;
   });

Route::get('/update', function () {
$user = App\Register::find(1); // 取得id = 1的資料
$user->name = "Wang";
$user->save();
echo'更改成功';

});


Route::get('/data', function () {
    return Register::all();

 });

 Route::get('/test', function () {
    // res.header("Access-Control-Allow-Origin","*")
    return view('personalInfo');

});
Route::post('/test', function () {
    return view('personalInfo');
});


Route::get('/signup', 'signupController@create');
Route::post('/signup', 'signupController@store');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
