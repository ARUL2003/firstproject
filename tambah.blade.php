@extends('layouts.master')

@section('tambah')
<section class="content-header">
      <h1>
                     <p>Cari Id Order :</p>
<form action="/admin/cari" method="GET">
  <input type="text" name="cari" placeholder="Cari id_order .." value="{{ old('cari') }}">
  <input type="submit" value="CARI">
</form>
        Table Transaksi
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">barang</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a href="/admin/tambah"> + Tambah order Baru</a>


           <a href="/admin/tambah"> + Tambah menu Baru</a>
           <div class="box-body>">
            <table class="table">
              <thead class="bg-primary">        
          
    <tr>
      <th scope="col">menu</th>
      <th scope="col">qty</th>
      <th scope="col">harga</th>
    </tr>
  </thead>
@endsection