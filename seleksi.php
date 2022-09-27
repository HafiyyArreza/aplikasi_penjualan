<!DOCTYPE html>
<html lang="en">
<head>
<title>Data Seleksi</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Pekerjaan
<select name="job">
<option value="Mahasiswa">Siswa
<option value="Orang biasa">Orang biasa
<option value="Youtuber">Youtuber
<option value="Presiden">Presiden
<option value="Pengangguran">Pengangguran
<option value="Pro player">Pro player
</select> <br />
<input type="submit" value="ok" />
</form>
<?php
if (isset($_POST['job'])) {
echo $_POST['job'];
}
?>
</body>
</html>
