@extends('app')
 
@section('content')

    <div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Formulir Sewa Kaset</div>
        <div class="panel-body">






		{!! Form::open( ['class' => 'form-horizontal','files'=>true, 'route' => ['kaset.create']]) !!}
				<div class="form-group">
 				{!! Form::label('name', 'Nama Kaset', array('class' => 'col-md-4 control-label'))  !!}
				<div class="col-md-6">
				{!! Form::text('name', null,array('class' => 'form-control'),'') !!}</div>
				</div>
				<div class="form-group">
				{!! Form::label('genre', 'Genre', array('class' => 'col-md-4 control-label')) !!}
				<div class="col-md-6">{!! Form::text('genre',null, array('class' => 'form-control')) !!}	</div>
				</div>
				<div class="form-group">
 				{!! Form::label('gambar', 'Gambar Kaset', array('class' => 'col-md-4 control-label'))  !!}
				<div class="col-md-6">
         		 {!! Form::file('gambar',['class' => 'btn']) !!}
	  			<p class="errors">{!!$errors->first('image')!!}</p>
				
				</div>
     		   </div>
     		   <div class="form-group">
 				{!! Form::label('jumlah', 'Jumlah', array('class' => 'col-md-4 control-label'))  !!}
				<div class="col-md-6">
				{!!Form::input('number', 'jumlah',  null, array('class' => 'form-control')) !!}
				</div>
     		   </div>
     		    <div class="form-group">
 				{!! Form::label('harga', 'Harga Sewa', array('class' => 'col-md-4 control-label'))  !!}
				<div class="col-md-6">
				{!!Form::input('number', 'harga',  null, array('class' => 'form-control')) !!}
				</div>
     		   </div>



				<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
    			{!! Form::submit('Tambah Kaset', ['class'=>'btn primary']) !!}
				</div>
    			{!! Form::close() !!}
    			</div>
      </div>
    </div>
  </div>
</div>
@endsection