<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class status extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date=Carbon::now();
        DB::table('statuses')->insert([
        ['title'=>'Нет ограничений', 'created_at'=>$date, 'updated_at'=>$date],
        ['title'=>'Нарушение', 'created_at'=>$date, 'updated_at'=>$date],
        ['title'=>'Теневой бан', 'created_at'=>$date, 'updated_at'=>$date],
        ['title'=>'Бан', 'created_at'=>$date, 'updated_at'=>$date],
    ]);
    }
}
