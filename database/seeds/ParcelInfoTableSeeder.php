<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ParcelInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('items')->delete();

        $items = [
            [
                'pn_no' => 'PM.04.0282300D001',
                'inner_length' => 282,
                'inner_width' => 282,
                'inner_height' => 300,
                'outer_length' => 292,
                'outer_width' => 292,
                'outer_height' => 316,
                'volume' => 23857200,
                'weight' => 0.85,
                'ordinary' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'pn_no' => 'PM.04.0320226D001',
                'inner_length' => 320,
                'inner_width' => 226,
                'inner_height' => 1140,
                'outer_length' => 330,
                'outer_width' => 236,
                'outer_height' => 1160,
                'volume' => 82444800,
                'weight' => 1.8,
                'ordinary' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'pn_no' => 'PM.04.0320226D003',
                'inner_length' => 320,
                'inner_width' => 226,
                'inner_height' => 1240,
                'outer_length' => 330,
                'outer_width' => 236,
                'outer_height' => 1260,
                'volume' => 89676800,
                'weight' => 1.7,
                'ordinary' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'pn_no' => 'PM.04.0370276D001',
                'inner_length' => 360,
                'inner_width' => 266,
                'inner_height' => 825,
                'outer_length' => 370,
                'outer_width' => 276,
                'outer_height' => 845,
                'volume' => 79002000,
                'weight' => 1.55,
                'ordinary' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'pn_no' => 'PM.04.0440320D001',
                'inner_length' => 440,
                'inner_width' => 320,
                'inner_height' => 1140,
                'outer_length' => 450,
                'outer_width' => 330,
                'outer_height' => 1160,
                'volume' => 160512000,
                'weight' => 2.5,
                'ordinary' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'pn_no' => 'PM.04.0476290D001',
                'inner_length' => 466,
                'inner_width' => 280,
                'inner_height' => 585,
                'outer_length' => 476,
                'outer_width' => 290,
                'outer_height' => 605,
                'volume' => 76330800,
                'weight' => 1.7,
                'ordinary' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'pn_no' => 'PM.04.0535475D001',
                'inner_length' => 535,
                'inner_width' => 475,
                'inner_height' => 825,
                'outer_length' => 545,
                'outer_width' => 485,
                'outer_height' => 845,
                'volume' => 209653125,
                'weight' => 2.9,
                'ordinary' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'pn_no' => 'PM.04.0565476D001',
                'inner_length' => 555,
                'inner_width' => 466,
                'inner_height' => 585,
                'outer_length' => 565,
                'outer_width' => 476,
                'outer_height' => 605,
                'volume' => 151298550,
                'weight' => 2.5,
                'ordinary' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'pn_no' => 'PM.04.1445235D001',
                'inner_length' => 1435,
                'inner_width' => 225,
                'inner_height' => 312,
                'outer_length' => 1445,
                'outer_width' => 235,
                'outer_height' => 332,
                'volume' => 100737000,
                'weight' => 3.1,
                'ordinary' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

        ];

        DB::table('items')->insert($items);

    }
}
