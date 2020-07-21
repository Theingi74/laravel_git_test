<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'ReceipeController@index');

/*Route::get('/', 'HomeController@index');
Route::get('php','HomeController@phpPage');
Route::get('js','HomeController@jsPage');*/

/*Route::get('/', function () {
    return view('home')->with('name','Home Page With');
});
*/
/*Route::get('php',function() {
	return view('php',[
		'data' => array(
          'lesson1' => 'This is Lesson1',
          'lesson2' => 'This is Lesson2',
          'lesson3' => 'This is Lesson3',
		)
       
	]);

});*/

/*Route::get('js',function(){
	return view('js',[
		'data' => array(
		  'lesson1' => 'This is JS Lesson1',
          'lesson2' => 'This is JS Lesson2',
          'lesson3' => 'This is JS Lesson3',

		)
	]);
});*/
