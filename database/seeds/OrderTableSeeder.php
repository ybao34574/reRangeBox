<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('order')->delete();
        DB::table('order_detail')->delete();

        $order = [
            [
                'id' => 'MD2019011216310001',
                'custom_id' => 000001,
                'status' => 0,
                'item_count' => 28,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 'MD2019011216310002',
                'custom_id' => 000002,
                'status' => 0,
                'item_count' => 39,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];

        $order_detail = [
            [
                'order_no' => 'MD2019011216310001',
                'item_no' => 1,
                'item_count' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'order_no' => 'MD2019011216310001',
                'item_no' => 2,
                'item_count' => 15,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'order_no' => 'MD2019011216310001',
                'item_no' => 3,
                'item_count' => 10,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'order_no' => 'MD2019011216310002',
                'item_no' => 4,
                'item_count' => 10,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'order_no' => 'MD2019011216310002',
                'item_no' => 8,
                'item_count' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'order_no' => 'MD2019011216310002',
                'item_no' => 5,
                'item_count' => 12,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'order_no' => 'MD2019011216310002',
                'item_no' => 10,
                'item_count' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'order_no' => 'MD2019011216310002',
                'item_no' => 2,
                'item_count' => 13,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

        ];

        DB::table('order')->insert($order);
        DB::table('order_detail')->insert($order_detail);
    }
}
