<?php

use Illuminate\Database\Seeder;

class Buku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $a = [
         ['judul'=>'Belajar Membaca Hati','jml_halaman'=>101,
          'penerbit'=>'CV Cinta Vertama','sinopsis'=>'Lorem Ipsum'
         ,'status'=>1],
         ['judul'=>'Belajar Untuk Dimengerti','jml_halaman'=>202,
          'penerbit'=>'CV Buku Kosong','sinopsis'=>'Lorem Ipsum',
          'status'=>false
      ]
   ];
      DB::table('bukus')->insert($a);
    }
}
