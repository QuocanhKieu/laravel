<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsController extends Controller
{
    //
	public function search() {
		$title = 'Data passed from WebsController.php to webs.search.blade.php';
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
		return view('webs.search', [
			'myArray' => $myArray,
			'title' => $title
		]);

	}
}
