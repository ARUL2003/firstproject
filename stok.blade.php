@extends('layouts.master')

@section('stok')


@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

  

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        
        <!-- /.box-body -->
        <div class="box-footer">
          <a href="tambah" <button type="button" class="btn btn-warning"> + Tambah Pegawai Baru</button></a>
          <br>

<div class="box-body">
<table class="table">
  <thead class="bg-primary">
    <tr>
        <th scope="col">no</th>
           <th scope="col">id_menu</th>
      <th scope="col">kategori</th>
      <th scope="col">nama_menu</th>
     <th scope="col">harga</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  @foreach($menu as $m)
  <tbody>
    <tr>
      <th scope="row">1</th>
     <td>{{ $m->id_menu }}</td>
      <td>{{ $m->kategori }}</td>
      <td>{{ $m->nama_menu }}</td>
      <td>{{ $m->harga }}</td>
     
      <td>

        <div class="form-check pl-0">
  <input id="stackedCheck1" class="form-check-input" type="checkbox" data-toggle="toggle" checked>
  <label for="stackedCheck1" class="form-check-label">Enabled</label>
</div>
<div class="form-check pl-0">
  <input id="stackedCheck2" class="form-check-input" type="checkbox" data-toggle="toggle" disabled>
  <label for="stackedCheck2" class="form-check-label">Disabled</label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Default checkbox
  </label>
</div>

<div class="custom-control custom-switch">
  <input type="checkbox" class="custom-control-input" id="customSwitch1">
  <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
</div>

       <a href="/admin/hapus/{{ $m->id_menu }}" <button type="button" class="btn btn-danger">hapus</button></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</br>
</div>
</div>
</section>
@endsection


@endsection