    <!-- Main content -->
    <section class="content">
      <div class="row">
          <div class="box box-default">
            <div class="box-header with-border">
<div class="box-body">
<table class="table">
  <thead class="bg-primary">
    <tr>
      <th scope="col">#</th>
      <th scope="col">menu</th>
      <th scope="col">qty</thqty>
     
      <th scope="col">opsi</th>

    </tr>
  </thead>
  @foreach($datas as $o)
  <tbody>
    <tr>
      <th scope="row">1</th>
    
      
    
      <td>{{ $o->id_order }}</td>
      <td>{{ $o->menu }}</td>
      <td>{{ $o->qty }}</td>      <td>
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
          </div>
        </div>
    </section>
