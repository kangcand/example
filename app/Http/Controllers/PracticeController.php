<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
   public function pass()
   {
      $nama  = "Ucup Abdul Mustofa";
      $alamat = "Gang Haji Sulam";
      return view('latihan', compact('nama','alamat'));
   }

   public function pass1()
   {
      $gaji = 2000000;
      return view('latihan1',['penghasilan'=> $gaji]);
   }

   // pass data parameter
   public function status($status = 'Jomblo')
   {
      // dd($status);
      return view('latihan2',compact('status'));
   }

   public function loop()
   {
      $buku = [
         ['judul'=>'Bangkit dari Remedial','penerbit'=>'Erlangga',
         'harga'=>100000,'penulis'=>'Aku yang suka remidi'
         ],
         ['judul'=>'Tips Move on dari kamu','penerbit'=>'Gramedia',
            'harga'=>150000,'penulis'=>'Epul'
         ],
         ['judul'=>'Kekukatan 1/3 Malam','penerbit'=>'Erlangga',
            'harga'=>250000,'penulis'=>'Mutia'
         ]
      ];
      return view('latihan3',compact('buku'));
   }
}
