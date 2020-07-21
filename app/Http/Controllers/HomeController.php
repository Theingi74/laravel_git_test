<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	$name = "Home page by using compact";

    	return view('home',compact('name'));


    	/*return view('home',[
    		'name' => 'HOME PAGE from Controller Page'
    	]);*/
    }

    public function phpPage(){
    	$data = array(
    		'lesson1' => 'This is PHP L1',
    		'lesson2' => 'This is PHP L2',
    		'lesson3' => 'This is PHP L3',
    	);
    	return view('php',compact('data'));
    }

    public function jsPage(){
    	$data = array(
    		'L1' => 'This is JS L1',
    		'L2' => 'This is JS L2',
    		'L3' => 'This is JS L3',
    	);

    	return view('js',compact('data'));
    }
}
