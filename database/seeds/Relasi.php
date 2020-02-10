<?php

use Illuminate\Database\Seeder;

use App\Mahasiswa;
use App\Wali;
use App\Dosen;
use App\Hobi;

class Relasi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('dosens')->delete();
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();

        # Membuat data dosen
        $dosen = Dosen::create(array(
          'nama' => 'Abdul Musthafa',
          'nipd' => '1234567890'));

        $this->command->info('Data dosen telah diisi!');

        #Membuat Data Mahasiswa
        $novay = Mahasiswa::create(array(
            'nama' => 'Noviyanto Rachmadi',
            'nim'  => '1015015072',
            'id_dosen' => $dosen->id
          ));

        $dije = Mahasiswa::create(array(
            'nama' => 'Djaffar',
            'nim'  => '1015015088',
            'id_dosen' => $dosen->id
          ));

        $ayu = Mahasiswa::create(array(
            'nama' => 'Puji Rahayu',
            'nim'  => '1015015078',
            'id_dosen' => $dosen->id
          ));

        $this->command->info('Mahasiswa telah diisi!');


        # Membuat wali si $novay
        Wali::create(array(
            'nama'  => 'Achmad S',
            'id_mahasiswa' => $novay->id
        ));

        # Membuat wali si $dije
        Wali::create(array(
            'nama'  => 'Entahlah',
            'id_mahasiswa' => $dije->id
        ));

        # Membuat wali si $ayu
        Wali::create(array(
            'nama'  => 'Arianto',
            'id_mahasiswa' => $ayu->id
        ));
        # Informasi ketika semua wali telah diisi.
        $this->command->info('Data mahasiswa dan wali telah diisi!');

        # Membuat Data tabel hobi
        $mandi_hujan = Hobi::create(array('hobi' => 'Mandi Hujan'));
        $baca_buku = Hobi::create(array('hobi' => 'Baca Buku'));

        $novay->hobi()->attach($mandi_hujan->id);
        $novay->hobi()->attach($baca_buku->id);
        $dije->hobi()->attach($mandi_hujan->id);
        $ayu->hobi()->attach($baca_buku->id);
        $this->command->info('Mahasiswa beserta Hobi telah diisi!');
    }
}
