<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        DB::table('post_info')->delete();

        $post_info = [
            [
                'delivery_type' => 0,
                'delivery_city' => '北京',
                'default_weight_price' => 23,
                'extra_weight_price' => 10,
                'volume_param' => 6000,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'delivery_type' => 0,
                'delivery_city' => '河北',
                'default_weight_price' => 23,
                'extra_weight_price' => 10,
                'volume_param' => 6000,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'delivery_type' => 0,
                'delivery_city' => '江西',
                'default_weight_price' => 18,
                'extra_weight_price' => 8,
                'volume_param' => 6000,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'delivery_type' => 0,
                'delivery_city' => '湖南',
                'default_weight_price' => 12,
                'extra_weight_price' => 12,
                'volume_param' => 6000,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'delivery_type' => 1,
                'delivery_city' => '北京',
                'default_weight_price' => 16.2,
                'extra_weight_price' => 5,
                'volume_param' => 6000,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'delivery_type' => 1,
                'delivery_city' => '新疆',
                'default_weight_price' => 18,
                'extra_weight_price' => 10,
                'volume_param' => 6000,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('post_info')->insert($post_info);
    }
}
