<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ItemTableSeeder extends Seeder
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
        DB::table('items_parcel')->delete();

        $items = [
            [
                'name' => '血管鞘组',
                'length' => 390,
                'width' => 130,
                'height' => 115,
                'volume' => 26943424,
                'weight' => 380,
                'box_type' => 8,
                'is_lay_down' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => '血管鞘组25cm',
                'length' => 520,
                'width' => 130,
                'height' => 115,
                'volume' => 26943424,
                'weight' => 460,
                'box_type' => 7,
                'is_lay_down' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => '亲水涂层导丝',
                'length' => 250,
                'width' => 230,
                'height' => 25,
                'volume' => 74764800,
                'weight' => 185,
                'box_type' => 9,
                'is_lay_down' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'PTCA球囊导管、后扩张PTCA球囊导管',
                'length' => 250,
                'width' => 230,
                'height' => 12.5,
                'volume' => 90340800,
                'weight' => 95,
                'box_type' => 9,
                'is_lay_down' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => '微导管',
                'length' => 280,
                'width' => 272,
                'height' => 12,
                'volume' => 83514200,
                'weight' => 110,
                'box_type' => 1,
                'is_lay_down' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => '导引延伸导管',
                'length' => 280,
                'width' => 272,
                'height' => 12,
                'volume' => 162708700,
                'weight' => 110,
                'box_type' => 1,
                'is_lay_down' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => '房间隔穿刺针510-710mm',
                'length' => 815,
                'width' => 100,
                'height' => 29,
                'volume' => 162708700,
                'weight' => 245,
                'box_type' => 8,
                'is_lay_down' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => '房间隔穿刺针89cm',
                'length' => 1130,
                'width' => 130,
                'height' => 38,
                'volume' => 162708700,
                'weight' => 515,
                'box_type' => 6,
                'is_lay_down' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => '先心鞘',
                'length' => 1060,
                'width' => 175,
                'height' => 35,
                'volume' => 162708700,
                'weight' => 637,
                'box_type' => 3,
                'is_lay_down' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => '导引导管（100cm）',
                'length' => 1130,
                'width' => 106,
                'height' => 30,
                'volume' => 162708700,
                'weight' => 425,
                'box_type' => 6,
                'is_lay_down' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('items')->insert($items);
    }
}
