<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
   public function index()
   {
      $buku = Buku::all();
      return view('buku.index',compact('buku'));
   }
   public function show($id)
   {
      $buku = Buku::find($id);
      return view('buku.show',compact('buku'));
   }

   public function hitungbuku(){
      $buku = Buku::count();
      return $buku;
   }

   public function buat_data($jdl)
   {
      $buku = new Buku();
      $buku->judul = $jdl;
      $buku->jml_halaman = 100;
      $buku->sinopsis = "Lorem Ipsum";
      $buku->status = false;
      $buku->penerbit = "CV Lorem Ipsum";
      $buku->save();
      return $buku;
   }

   public function update($id,$judul)
   {
      $buku = Buku::find($id);
      $buku->judul = $judul;
      $buku->jml_halaman = 100;
      $buku->sinopsis = "Lorem Ipsum";
      $buku->status = false;
      $buku->penerbit = "CV Lorem Ipsum";
      $buku->save();
      return $buku;
   }
   public function delete($id)
   {
      $buku = Buku::find($id);
      $buku->delete();
      return $buku;
   }

}
