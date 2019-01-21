<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
class MenuController extends Controller
{
    public function index(){
    	return view('menus');
    }

    public function rego(Request $request){
    	echo $request->input('name');
    	return view('welcome');
    }

    public function ajax(Request $request){
    	return view('ajax');
    }
}
