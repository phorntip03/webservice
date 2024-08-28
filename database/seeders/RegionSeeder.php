<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('regions')->insert([
            ['name' => "ภาคกลาง",
            'created_at' => now(),
            'country_id'=>'1',
            ],//ข้อมูลชุดที่1
            ['name' => "เอเชียตะวันออกเฉียงใต้",
            'created_at' => now(),
            'country_id'=>'2',
            ],
            ['name' => "เวียดนามเหนือ",
            'created_at' => now(),
            'country_id'=>'3',
            ],
            ['name' => "ตะวันตกเฉียงเหนือของยุโรป",
            'created_at' => now(),
            'country_id'=>'4',
            ],
            ['name' => "เอเชีย",
            'created_at' => now(),
            'country_id'=>'5',
            ],
        ]);
    }
}
