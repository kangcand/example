<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('Relasi');
        # Tampilkan informasi berikut bila Seeder telah dilakukan
        $this->command->info('SeederRelasi berhasil.');
    }
}
