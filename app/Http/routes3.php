<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::model('kaset','App\Kaset');
Route::get('/tambah-kaset',['as'=>'kaset.create','uses'=> 'KasetController@store']);
Route::post('/tambah-kaset', 'KasetController@store');
Route::post('updatekaset','KasetController@update');
Route::get('addkaset','KasetController@create');
Route::get('template','KasetController@app');

Route::get('ubahkaset/{id}', ['as'=>'kaset.ubah','uses'=>'KasetController@edit']);
Route::get('hapuskaset/{id_kaset}', ['as'=>'kaset.hapus','uses'=>'KasetController@destroy']);
Route::get('/kaset', ['as'=>'kaset.show','uses'=>'KasetController@index']);

Route::get('/deletekaset/{a}', ['as' => 'kaset.delete',function($a){
	echo $a;
}]);
Route::get('/editkaset/{a}', ['as' => 'kaset.edit',function($a){
	echo $a;
}]);



	
