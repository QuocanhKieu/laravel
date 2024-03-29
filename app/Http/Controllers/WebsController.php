<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsController extends Controller
{
    //
	public function search() {
		$title = 'Data passed from WebsController.php to webs.search.blade.php';

		return view('webs.search', com);
	}
}
