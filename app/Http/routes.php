<?php
Route::get('/', function () {
    return view('welcome');
});
Route::model('kaset','App\Kaset');
Route::get('/tambah-kaset',['as'=>'kaset.create','uses'=> 'KasetController@stor']);
Route::post('/tambah-kaset', 'KasetController@stor');
Route::post('updatekaset',['as'=>'kaset.update','uses'=>'KasetController@updat']);
Route::get('addkaset','KasetController@creat');
Route::get('template','KasetController@app');
Route::get('/home','HomeController@index');
Route::get('detail2kaset/{id}','KasetController@show');
Route::get('detailkaset/{id}','KasetController@show');
Route::get('sewakaset/{id}','HomeController@create');
Route::get('detail/{id}','HomeController@detail');


Route::get('ubahkaset/{id}', ['as'=>'kaset.ubah','uses'=>'KasetController@edited']);
Route::get('hapuskaset/{id_kaset}', ['as'=>'kaset.hapus','uses'=>'KasetController@destroyed']);
Route::get('/kaset', ['as'=>'kaset.show','uses'=>'KasetController@indexx']);

Route::get('/deletekaset/{a}', ['as' => 'kaset.delete',function($a){
	echo $a;
}]);
Route::get('pdf', ['as' => 'pdf',function(){
	$pdf = App::make('dompdf.wrapper');
	 $kaset= DB::table('cassettes')->get();
	//$a="aku";
	$pdf =PDF::loadView('pdf',compact('kaset'));
//$pdf->loadHTML('<h1>Saya</h1>');
return $pdf->stream();
	
}]);



	
