<html>
    <head>
        <title>Tambah Kaset</title>
    </head>
    <body>
        
		<form method="POST" action="http://localhost/mymovie1.com/public/tambah-kaset">
			<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
			Nama Kaset:
			<input name="name" type="text" value=""  /><br>
			Genre:
			<input name="genre" type="text" value=""/><br>
			Jumlah:
			<input name="jumlah" type="number" value=""/><br>
			Harga:
			<input name="harga" type="number" value=""/><br>
			<input type="submit"/>
		</form>
    </body>
</html>