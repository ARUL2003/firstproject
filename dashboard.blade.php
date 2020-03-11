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

          <br>

              <p>Cari Id Order :</p>
<form action="/admin/cari" method="GET">
  <input type="text" name="cari" id="cari" placeholder="Cari id_order .." value="{{ old('cari') }}">
  <input type="submit" value="CARI">
</form>


<div class="box-body">
<table class="table">
  <thead class="bg-primary">
    <tr>
      <th scope="col">#</th>
      <th scope="col">id_order</th>
      <th scope="col">menu</th>
       <th scope="col">harga</th>

      <th scope="col">qty</thqty>
        <th scope="col">pelanggan</thqty>

     
      <th scope="col">opsi</th>

    </tr>
  </thead>
  @foreach($data as $o)
  <tbody>
    <tr>
      <th scope="row">1</th>
    
      
    
      <td>{{ $o->id_order }}</td>
      <td>{{ $o->menu }}</td>
      <td>{{ $o->harga }}</td>
      <td>{{ $o->qty }}</td>
      <td>{{ $o->pelanggan }}</td>
      <td>
       <a href="/admin/hapus/{{ $o->id_order }}" <button type="button" class="btn btn-danger">hapus</button></a>
       <a href="/admin/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>


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