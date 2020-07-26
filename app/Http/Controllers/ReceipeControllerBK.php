<?php

namespace App\Http\Controllers;

use App\Receipe;
use Illuminate\Http\Request;

class ReceipeController extends Controller
{
    public function index()
    {
    	$data = Receipe::all();
    	/*dd($data);*/

    	return view('home',compact('data'));
    }
       
    public function createReceipe()
    {
    	return view ('create');
    } 

    public function create(Request $request)
    {
    	/*dd($request->all());*/
    	$receipe = new Receipe();
    	$receipe->name = $request->name;
    	$receipe->ingredients = $request->ingredients;
    	$receipe->category = $request->category;

    	$receipe->save();

    	return redirect('receipe');
    }



}
