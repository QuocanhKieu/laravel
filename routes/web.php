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
Route::get('products', [
	ProductsController::class,
	'index'//index method of ProductsController trong controll mới return ra view
]);
Route::get('/', function () {
    return view('home');
	// return env("MY_NAME");
});


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
Route::get("/search", [WebsController::class, 'search']);
// trang chủ danh sách tìm kiếm chi tiết luồng cơ bản rồi mới tới mua 
// và 