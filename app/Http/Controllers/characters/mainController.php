<?php

namespace App\Http\Controllers\characters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index() {
    	return view('characters.index');
    }
}
