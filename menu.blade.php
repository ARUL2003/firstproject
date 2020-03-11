@extends('layouts.master')

@section('menu')
<section  class="content">

     
    <form method="post" action="/admin/store">
 
          <!-- TO DO List -->

  <div class="form-row">
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Daftar Menu</h3>

            </div>


            <div class="form-group col-md-6">
               <label for="inputState">masakan</label>
               <select id="inputState" class="form-control" placeholder="Menu">
                 
                   @foreach($datas as $d)
                 <option>
                   {{$d->nama_makanan}}

                 </option>
                 @endforeach
              </select>
           </div> 
        </div> 
  
  
          <div class="form-group col-md-2 box-footer clearfix no-border">
             <input type="numeric" name="qty">
          </div>
        

     <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
              <a href="admin/detail"><button type="submit" class="btn btn-default pull-right" class="btn btn-success">oke</button></a>
            </div>
          
          <!-- /.box -->
          @include('admin.detail')
        </div>
  </form>

</section>

  
@endsection