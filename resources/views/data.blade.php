@extends('layouts.3')
@section('konten')
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body background="img/dsa.jpg"></body>
<div  class="col-md-13">
  <table class="table table-bordered">
            <thead>
        <th>ID</th>
        <th>NIS</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>TEMPAT LAHIR</th>
        <th>CITA-CITA</th>
        <th>TANGGAL LAHIR</th>
        <th>HOBI</th>
        <th>FOTO</th>
            </thead>
            <tbody>
   @foreach ($c as $gg)
   <tr>
  <td>{{$gg -> id}}</td>
  <td>{{$gg -> nis}}</td>
  <td>{{$gg -> nama_siswa}}</td>
  <td>{{$gg -> alamat}}</td>
  <td>{{$gg -> tempat_lahir}}</td>
  <td>{{$gg -> cita_cita}}</td>
  <td>{{$gg -> tanggal_lahir}}</td>
  <td>{{$gg -> hobi}}</td>
    <td><img src="{{ asset('img/'.$gg->foto) }}" style="max-height: 120px;max-width: 150px;"></td>
</tr>
  @endforeach
            </tbody>
</tr>
</table>
</body>
</html>
@endsection