<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class categories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date=Carbon::now();
        DB::table('categories')->insert([
        ['title'=>'Юмор', 'created_at'=>$date, 'updated_at'=>$date],
        ['title'=>'Музыка', 'created_at'=>$date, 'updated_at'=>$date],
        ['title'=>'Игры', 'created_at'=>$date, 'updated_at'=>$date],
    ]);
    }
}
