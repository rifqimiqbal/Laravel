		
 @extends('app')
 
@section('content')



    <div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">List Kaset</div>
        <div class="panel-body">
 
       <table class="table table-hover table-striped">
  <tr>
    <th>Nama Kaset</th>
    <th>Genre</th>
    <th>Jumlah</th>
    <th>Harga Sewa</th>
    
    <th></th>
     <th></th>
    
    
    
    
    
  </tr>
 @foreach( $kaset as $c )
  <tr>
    <td>{{$c->nama_kaset}}</td>
    <td> {{$c->genre}}</td>
    <td>{{$c->jumlah}}</td>
    <td>{{$c->harga_sewa}}</td>
    <td><a class="btn btn-primary" href="sewakaset/{{ $c->id_kaset}}"> Sewa</a></td>
    <td><a class="btn btn-success" href="detail/{{ $c->id_kaset}}">Detail</a></td>
   </tr>
   @endforeach



  
 
</table>

</div>
      </div>
    </div>
  </div>
</div>
@endsection