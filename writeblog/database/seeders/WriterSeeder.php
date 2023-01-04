<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Writer;
use BaconQrCode\Writer as BaconQrCodeWriter;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Writer::create([
        'name' => 'Süleyman Özcan',
        'email'=>'ozcanslo@gmail.com',
        'password' => bcrypt(123456),
        ]);
    }
}
