<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('titles')->insert([
            [
                'name' => "นาย",
                'created_at' => now(),
            ],//ข้อมูลชุดที่1
            [
                'name' => "นาง",
                'created_at' => now(),
            ],//ข้อมูลชุดที่2
            [
                'name' => "นางสาว",
                'created_at' => now(),
            ],//ข้อมูลชุดที่3
            
        ]);
    }
}