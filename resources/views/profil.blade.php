<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
</head>
<body>
	<form method="post" action="/profil" enctype="multipart/form-data">
		{{csrf_field()}}

		Nama: <input type="text" name="nama" value="" /> <br>
		pilih file :<input type="file" name="filenama" value=""/>

		<hr>
		<input type="submit" name="submit" value="simpan"/>
	</form>
</body>
</html>