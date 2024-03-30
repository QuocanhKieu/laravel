<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    	public function index() {
		$title = 'Data passed from ProductsController.php to index.search.blade.php';
		$x = 1;
		$y = 2;
		//cách 1
		// return view('webs.search', compact('title', x, y));
		//send an associate array
		$myArray = [
			'name' => 'iphone 14',
			'year' => 2022,
			'isFavorite' => true
		];
		//cách 3
		// return view('webs.search', compact('myphone', 'title'));
		echo route('products');
		return view('products.index', [
			'myArray' => $myArray,
			'title' => $title
		]);

	}
	// public function detail($id) {
	// 	// return view('products.detail',[
	// 	// 	'id' => $id
	// 	// ]);
	// 	return 'Product id :'. $id; 
	// }

		public function detail($productName, $id) {
		// return view('products.detail',[
		// 	'id' => $id
		// ]);
		// $products = [
		// 	'iphone 15' => 'iphone 15@@',
		// 	'samsung' => 'samsung@@'
		// ];
		// Example of providing parameters to the route helper function
		echo route('abc', ['productName' => $productName, 'id' => $id]);

		// /print_r(route('products'));// get route's name 
		// return view('products.detail', [
		// 	'product' => $products[$productName] ?? 'unknown product',
		// 	'id' => $id
		// ]) ;
		return view('products.detail') ;
	}
}

