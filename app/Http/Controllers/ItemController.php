<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
 // menampilkan halaman form
	public function create(){
    	return view('form');
    }

}
