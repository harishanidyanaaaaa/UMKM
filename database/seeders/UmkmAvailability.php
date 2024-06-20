<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UmkmAvailability extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $umkmAvailability = new \App\Models\UmkmAvailability();
        $umkmAvailability->umkm_id = 1;
        $umkmAvailability->day = 'Monday';
        $umkmAvailability->open = '08:00:00';
        $umkmAvailability->close = '17:00:00';
        $umkmAvailability->located = 'Jl. Raya Bogor';
        $umkmAvailability->save();
    }
}
