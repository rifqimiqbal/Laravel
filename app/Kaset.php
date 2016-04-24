<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kaset extends Model
{
	protected $table = 'cassettes';
	protected $fillable = ['nama_kaset','genre','jumlah','harga_sewa','status','gambar','created_at','updated_at'];
    //
}
