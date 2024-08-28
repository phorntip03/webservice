<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('provinces')->insert([
            ['name' => "กรุงเทพ",
            'created_at' => now(),
            'region_id'=>'1',
            ],//ข้อมูลชุดที่1

            ['name' => "พิษณุโลก",
            'created_at' => now(),
            'region_id'=>'1',
            ],
            ['name' => "รัฐ",
            'created_at' => now(),
            'region_id'=>'2',
            ],
             ['name' => "คะฉิ่น",
            'created_at' => now(),
            'region_id'=>'2',
            ],
            ['name' => "ห่าซาง",
            'created_at' => now(),
            'region_id'=>'3',
            ],
            ['name' => "ฮานอย",
            'created_at' => now(),
            'region_id'=>'3',
            ],
            ['name' => "ลอนดอน",
            'created_at' => now(),
            'region_id'=>'4',
            ],
            ['name' => "บริสตอล",
            'created_at' => now(),
            'region_id'=>'4',
            ],
            ['name' => "อันซัน",
            'created_at' => now(),
            'region_id'=>'5',
            ],
            ['name' => "โซล",
            'created_at' => now(),
            'region_id'=>'5',
            ],
    
        ]);
    }
}
