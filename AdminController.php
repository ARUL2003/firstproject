<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\makanans;


use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai      
    	$data = DB::table('detail_order')
                    ->Join('orders', 'orders.id_order','=', 'detail_order.id_order')
                    ->select('detail_order.*','orders.*')
                   ->get();


    	// mengirim data pegawai ke view index
    	return view('/admin/dashboard',['data' => $data]);

    }

      public function cari(Request $request)
  {
    // menangkap data pencarian
    $dcari = $request->cari;
    //dd($cari);
     
        // mengambil data dari table pegawai sesuai pencarian data
    $data = DB::table('detail_order')
    ->Join('orders', 'orders.id_order','=', 'detail_order.id_order')
     ->select('detail_order.*','orders.*')

    ->where('detail_order.id_order','like',"%".$dcari."%")
    ->get();
     //dd($detail_order);
   
    //$order = DB::table('order')
            //->join('order', 'id_order', '=', 'order.id_order')
            //->select('order.*', 'detail_order.qty', 'order.nama_pelanggan')
            //->get();
 
        // mengirim data pegawai ke view index
    return view('/admin/dashboard',['data' => $data]);
 
  }

// method untuk menampilkan view form tambah pegawai
    public function menu()
    {
              // return data ke view
         $datas = DB::table('makanans')
                  
                ->Join('detail_order', 'detail_order.id_order','=', 'makanans.id_makanan')
                 
                 ->select('detail_order.*','makanans.*')
         ->get();
                // ->Join('makanans', 'makanans.id_makanan','=', 'detail_order.id_order')

                // ->Join('minumans', 'minumans.id_minuman','=', 'detail_order.id_order')

                // ->select('detail_order.*','makanans.*','minumans.*')->get();
                // ->insert([
                //        'menu' => $request->menu,
                //        'qty' => $request->qty,
                //      ]);

       // memanggil view tambah
       return view('/admin/menu',['datas' =>$datas]);
   
      }

      public function ambil(Request $request)
      {
        $datas = DB::table('makanans')
       
         ->Join('detail_order', 'detail_order.id_order','=', 'makanans.id_makanan')


        ->insert([
           'nama_makanan' => $request->$nama_makanan,
           'qty' => $request->$qty,


          ]);
      return redirect('/admin/menu',['datas' =>$datas]);
    }
     

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

	// memanggil view tambah
	return view('/admin/tambah');
   
      }

      // method untuk insert data ke table pegawai
      public function store(Request $request)
     {
	// insert d     ata ke table pegawai
 DB::table('detail_order')
                ->Join('orders', 'orders.id_order','=', 'detail_order.id_order')
                ->insert([
                       'menu' => $request->menu,
                       'qty' => $request->qty,
                     ]);



	// alihkan halaman ke halaman pegawai
	return redirect('/admin/menu');

 }

 // method untuk edit data pegawai
     public function edit($id)
    {
  // mengambil data pegawai berdasarkan id yang dipilih
  $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
  // passing data pegawai yang didapat ke view edit.blade.php
  return view('/admin/edit',['pegawai' => $pegawai]);

    }

 // update data pegawai
   public function update(Request $request)
   {
  // update data pegawai
  DB::table('pegawai')->where('pegawai_id',$request->id)->update([
    'pegawai_nama' => $request->nama,
    'pegawai_jabatan' => $request->jabatan,
    'pegawai_umur' => $request->umur,
    'pegawai_alamat' => $request->alamat
  ]);
  // alihkan halaman ke halaman pegawai
  return redirect('/admin/dashboard');
   }

      // method untuk hapus data pegawai
   public function hapus($id)
   {   
  // menghapus data pegawai berdasarkan id yang dipilih
  DB::table('pegawai')->where('pegawai_id',$id)->delete();
    
  // alihkan halaman ke halaman pegawai
  return redirect('/admin/dashboard');
    }

 public function Stok()
    {
      

      // mengirim data pegawai ke view index
      return view('/admin/stok');

    }

     public function bareng()
    
      // mengambil semua data pengguna
     
    {

      
 
      // mengambil semua data pengguna
      //$order = order::all()
      //$no='1001';
          $data = orders::join('detail_order','detail_order.id_order','=','orders.id_order')
      ->where('orders.id_order','$')
       ->select('orders.*')
       ->get();
           //->where('order.order_id','1001')->get();
            // return data ke view
      $order = DB::table('order')
            ->join('detail_order', 'id_order', '=', 'detail_order.id_order')
            ->join('order', 'id_order', '=', 'order.id_order')
            ->select('order.*', 'detail_order.qty', 'order.nama_pelanggan')
            ->get();

      return view('/admin/index9');

    }
  
  
    public function jajal()
    {
      // mengambil semua data pengguna
      $pengguna = Pengguna::all();
      // return data ke view
      return view('/admin/baru', ['pengguna' => $pengguna]);
    }

     public function login()
    {
      // mengambil semua data pengguna
      //$pengguna = Pengguna::all();
      // return data ke view
      return view('/admin/login');
    }

}
    