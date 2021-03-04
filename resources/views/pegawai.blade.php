<!DOCTYPE html>
<html>
<head>
 <title>LARAVEL</title>
</head>
<body>
 
<h1>Data Pegawai</h1>
<table border='1'>
 <tr>
    <td>ID</td>
    <td>NAMA</td>
    <td>ALAMAT</td>
 </tr>
 @foreach($pegawai as $p)
 <tr>
 <td>{{$p['id']}}</td>
 <td>{{$p['nama']}}</td>
 <td>{{$p['alamat']}}</td>
 </tr>
 @endforeach 
</table>
</body>
</html>