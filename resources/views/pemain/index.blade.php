@extends('pemain.layout')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Nomor Punggung</th>
      <th scope="col">Posisi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1; ?>
    
    @foreach($pemain as $p)
    <tr>
      <th scope="row">{{$no}}</th>
      <td>{{$p['nama_pemain']}}</td>
      <td>{{$p['nomor_punggung']}}</td>
      <td>{{$p['posisi']}}</td>
    </tr>
    <?php
    $no++;?>
    
    @endforeach
  </tbody>
</table>
@endsection