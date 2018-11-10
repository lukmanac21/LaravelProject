<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class CategoryController extends Controller
{
    public function index(){
    	$response = ['status' => true, 'data' => Auth::guard('api')->user()];
    	return response()->json($response);
    }
}
