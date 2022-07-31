<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for($i=0 ; $i <= 10 ; $i++){
            DB::table('orders')->insert([
                'store_name' => 'tehran',
            ]);

            DB::table('orders')->insert([
                'store_name' => 'yazd',
            ]);
        }


    }
}
