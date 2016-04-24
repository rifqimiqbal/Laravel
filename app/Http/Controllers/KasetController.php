<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Redirect;
use DB;

class KasetController extends Controller
{

   
     
    protected $rules = [
        'name' => ['required'],
        'genre' => ['required'],
        'jumlah' => ['required'],
        'harga' => ['required']
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexx()
    {
        $cassettes =  DB::table('cassettes')->get();
         
        return view('kaset', ['kaset' => $cassettes]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function creat()
    {
     
        return view('formkaset');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function stor(Request $request)
    {
        if (Input::hasFile('gambar')) {
    $destinationPath = 'uploads'; // upload path
    $extension = Input::file('gambar')->getClientOriginalExtension(); // getting image extension
    $fileName = rand(11111,99999).'.'.$extension; // renaming image
    Input::file('gambar')->move($destinationPath, $fileName);
    $gambar=$destinationPath. '/'.$fileName;}
    else{
        $gambar=NULL;
    } // uploading file to given path
		    $nama1 = $_POST['name']; 
            $genre = $_POST['genre']; 
            $jumlah = $_POST['jumlah'];
            $harga = $_POST['harga']; 
			$sql="call sp_tambah_kaset('$nama1','$genre','$jumlah','$harga','$gambar')";
            DB::connection()->getPdo()->exec($sql);
            DB::commit();
			 return Redirect::to('/kaset')->with('message','berhasil menambah data');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edited($id)
    {
		$data= DB::table('cassettes')->where('id_kaset','=',$id)->first();
        return view('edit_kaset2', ['kaset' => $data]);
		//return view::make('edit_kaset')->with('kaset',$data);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updat()
    {
            $id = $_POST['id']; 
            $genre = $_POST['genre']; 
            $jumlah = $_POST['jumlah'];
            $harga = $_POST['harga']; 
       $sql="call sp_edit_data_kaset('$id','$genre','$jumlah','$harga')";
       DB::connection()->getPdo()->exec($sql);
       DB::commit();
       return Redirect::to('/kaset')->with('message','berhasil mengubah data');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyed($id)
    { DB::table('cassettes')->where('id_kaset','=',$id)->delete();
	  return Redirect::to('/kaset')->with('message','berhasil menghapus data');
        //
    }
    public function app()
    {
        return view('app');
    }
}
