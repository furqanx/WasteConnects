<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('addresses')->insert([
            [
                'province' => 'Aceh',
                'city' => 'Banda Aceh',
                'district' => 'Kuta Alam',
            ],
            [
                'province' => 'Aceh',
                'city' => 'Banda Aceh',
                'district' => 'Banda Raya',
            ],
            [
                'province' => 'Aceh',
                'city' => 'Banda Aceh',
                'district' => 'Syiah Kuala',
            ],
        ]);
    }
}
