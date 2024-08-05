<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class chenLoaisp extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loaisp')->insert([
            ['tenLoai'=>'Sam sung', 'thutu'=>1, 'anHien'=>1],
            ['tenLoai'=>'HTC', 'thutu'=>2, 'anHien'=>1],
            ['tenLoai'=>'Apple', 'thutu'=>3, 'anHien'=>1],
            ['tenLoai'=>'LG', 'thutu'=>4, 'anHien'=>1],
            ['tenLoai'=>'Motorola', 'thutu'=>5, 'anHien'=>1],
            ['tenLoai'=>'Mobel', 'thutu'=>6, 'anHien'=>0],
        ]);
    }
}
