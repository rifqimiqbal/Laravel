<!--<html>
    <head>
        <title>Edit Kaset</title>
    </head>
    <body>
        
		<form method="POST" action="http://localhost/mymovie1.com/public/updatekaset">
			<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
			Id:
			<input name="id" type="text" value="{{$kaset->id_kaset}}" readonly /><br>
			Genre:
			<input name="genre" type="text" value="{{$kaset->genre}}"/><br>
			Jumlah:
			<input name="jumlah" type="number" value="{{$kaset->jumlah}}"/><br>
			Harga:
			<input name="harga" type="number" value="{{$kaset->harga_sewa}}"/><br>
			<input type="submit"/>
		</form>
    </body>
</html>-->
		
	@extends('app')
 
@section('content')

    <div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Ubah Kaset</div>
        <div class="panel-body">






		{!! Form::open( ['class' => 'form-horizontal','files'=>true, 'route' => ['kaset.update']]) !!}
				<div class="form-group">
 				{!! Form::label('Id', 'Id Kaset', array('class' => 'col-md-4 control-label'))  !!}
				<div class="col-md-6">
				{!! Form::text('id', $kaset->id_kaset,array('class' => 'form-control','readonly' => true),'') !!}</div>
				</div>
				<div class="form-group">
				{!! Form::label('genre', 'Genre', array('class' => 'col-md-4 control-label')) !!}
				<div class="col-md-6">
				{!! Form::text('genre',$kaset->genre, array('class' => 'form-control')) !!}	</div>
				</div>
				<!--<div class="form-group">
 				{!! Form::label('gambar', 'Gambar Kaset', array('class' => 'col-md-4 control-label'))  !!}
				<div class="col-md-6">
         		 {!! Form::file('gambar',['class' => 'btn']) !!}
	  			<p class="errors">{!!$errors->first('image')!!}</p>
				
				</div>
     		   </div>-->
     		   <div class="form-group">
 				{!! Form::label('jumlah', 'Jumlah', array('class' => 'col-md-4 control-label'))  !!}
				<div class="col-md-6">
				{!!Form::input('number', 'jumlah', $kaset->jumlah, array('class' => 'form-control')) !!}
				</div>
     		   </div>
     		    <div class="form-group">
 				{!! Form::label('harga', 'Harga Sewa', array('class' => 'col-md-4 control-label'))  !!}
				<div class="col-md-6">
				{!!Form::input('number', 'harga',  $kaset->harga_sewa, array('class' => 'form-control')) !!}
				</div>
     		   </div>



				<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
    			{!! Form::submit('Ubah', ['class'=>'btn primary']) !!}
				</div>
    			{!! Form::close() !!}
    			</div>
      </div>
    </div>
  </div>
</div>
@endsection