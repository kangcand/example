<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
   public function latihan2()
   {
      $a = 'Mahmud';
      $b = 'Zulkarnaen';
      return 'Nama Saya Adalah '.$a.' '.$b;
   }

   // Passing data from controller to view
   public function latihan3(){
      $a = "Dadang Mambo";
      return view('test',compact('a'));
   }

   public function latihan4(){
      $a = "Icip Nirin";
      return view('test2',['nama' => $a]);
   }

   public function bio(){
      $a = "Candra";
      $b = "Islam";
      $c = "Laki-laki";
      $d = "Dark Bandung";
      $e = "Makan";
      return view('biodata',compact('a','b','c','d','e'));
   }

   public function menu($a = "Nasi Padang")
   {
      return view('menu',compact('a'));
   }

   public function pesan($a = null, $b = null, $c= null)
   {
      if(isset($a)) {
         $a =  "Anda memesan $a";
      }
      if(isset($b)) {
         $a =  "$a & $b";
      }
      if(isset($c))
      {
         if($c >= 25000)
         {
            $c = ", Paket Large";
         } elseif($c <= 25000 && $c >=15000)
         {
            $c = ", Paket Medium";
         }
         elseif($c <=15000 && $c >=1){
            $c = ", Paket Small";
         } else {
            $c = ", Harga Tidak Valid";
         }
      }
      if(!isset($a))
      {
         $a = "Anda Belum Memesan Sesuatu";
      }
      return view('pesan',compact('a','c'));
   }
}
