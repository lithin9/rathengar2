<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class mainController extends Controller
{
    public function index() {
    	return view('user.index');
    }
}
