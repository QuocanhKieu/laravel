<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\WebsController;

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

Route::get('/', function () {
    return view('home');
	// return env("MY_NAME");
});
Route::get("/search", [WebsController::class, 'search']);
//

// Route::get('products', [
// 	ProductsController::class,
// 	'index'//index method of ProductsController trong controll mới return ra view
// ])->name('products');

//route có tham số
// Route::get("products/{id}", [ProductsController::class, 'detail']);
// Route::get("products/{productName}", [ProductsController::class, 'detail']);
// validate tham số
/*Route::get("products/{productName}", [
	ProductsController::class,
	'detail'
	])->where('id','[0-9]+');// dùng regular expression regex
*/
	// validate nhiều tham số
Route::get("products/{productName}/{id}", [
	ProductsController::class, 'detail'
	])->where([
		'productName' => '[a-zA-Z0-9]+', 
		'id'=> '[0-9]+'
	])->name('abc');// dùng regular expression regex// định nghĩa route name
/*


Route::get('/users', function () {
    return "this is the users page";
	// return env("MY_NAME");
});
Route::get('/foods', function () {
    return ["a", "b", "D"];
	// return env("MY_NAME");
});
Route::get('/json', function () {
	return response()->json([
		'message' => 'Hello, world!',
		'name' => 'Kieu Quoc Anh'
	]);
	// return env("MY_NAME");
});
Route::get('/something', function(){
	return redirect('/');// redirect to root
});
*/
// trang chủ danh sách tìm kiếm chi tiết luồng cơ bản rồi mới tới mua 
// và 