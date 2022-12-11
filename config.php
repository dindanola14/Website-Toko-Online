<?php
$page = (isset($_GET['page']))? $_GET['page'] : '';
switch($page){
  case 'home': // $page == home (jika isi dari $page adalah home)
  include "views/home.php"; // load file home.php yang ada di folder views
  break;
  
  case 'tampil_produk': // $page == berita (jika isi dari $page adalah berita)
  include "views/product/tampil_produk.php"; // load file berita.php yang ada di folder views
  break;
  
  case 'tambah_produk': // $page == berita (jika isi dari $page adalah berita)
  include "views/product/tambah_produk.php"; // load file berita.php yang ada di folder views
  break;

  case 'ubah_produk': // $page == berita (jika isi dari $page adalah berita)
  include "views/product/ubah_produk.php"; // load file berita.php yang ada di folder views
  break;

  case 'hapus_produk': // $page == berita (jika isi dari $page adalah berita)
  include "views/product/hapus_produk.php"; // load file berita.php yang ada di folder views
  break;

  case 'produk': // $page == berita (jika isi dari $page adalah berita)
  include "views/product/produk.php"; // load file berita.php yang ada di folder views
  break;

  case 'tampil_petugas': // $page == berita (jika isi dari $page adalah berita)
  include "views/petugas/tampil_petugas.php"; // load file berita.php yang ada di folder views
  break;
  
  case 'tambah_petugas': // $page == berita (jika isi dari $page adalah berita)
  include "views/petugas/tambah_petugas.php"; // load file berita.php yang ada di folder views
  break;

  case 'ubah_petugas': // $page == berita (jika isi dari $page adalah berita)
  include "views/petugas/ubah_petugas.php"; // load file berita.php yang ada di folder views
  break; 

  case 'hapus_petugas': // $page == berita (jika isi dari $page adalah berita)
  include "views/petugas/hapus_petugas.php"; // load file berita.php yang ada di folder views
  break;

  case 'tampil_pelanggan': // $page == berita (jika isi dari $page adalah berita)
  include "views/pelanggan/tampil_pelanggan.php"; // load file berita.php yang ada di folder views
  break;  

  case 'tambah_pelanggan': // $page == berita (jika isi dari $page adalah berita)
  include "views/pelanggan/tambah_pelanggan.php"; // load file berita.php yang ada di folder views
  break;  

  case 'ubah_pelanggan': // $page == berita (jika isi dari $page adalah berita)
  include "views/pelanggan/ubah_pelanggan.php"; // load file berita.php yang ada di folder views
  break;  

  case 'hapus_pelanggan': // $page == berita (jika isi dari $page adalah berita)
  include "views/pelanggan/hapus_pelanggan.php"; // load file berita.php yang ada di folder views
  break;  

  case 'tentang': // $page == tentang (jika isi dari $page adalah tentang)
  include "views/tentang.php"; // load file tentang.php yang ada di folder views
  break;
  
  // case 'case_selanjutnya':
  // include "views/case_selanjutnya.php";
  // break;
  
  // case 'case_selanjutnya':
  // include "views/case_selanjutnya.php";
  // break;
  
  // case 'case_selanjutnya':
  // include "views/case_selanjutnya.php";
  // break;
  
  default: // Ini untuk set default jika isi dari $page tidak ada pada 3 kondisi diatas
  include "views/home.php";
}
?>