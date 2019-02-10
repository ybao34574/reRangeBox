<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Parcel extends Model
{
    //
    protected $table = 'parcel_info';

    public static function reRangeParcel()
    {
        try{
            //物品
            $items[0] = 60;
            $items[1] = 45;
            $items[2] = 35;
            $items[3] = 20;
            $items[4] = 20;
            $items[5] = 20;
            $box_volume_count = 100; //每个盒 子的最大容积
            $box_count = 0; //共用盒子总数
            $item_count = count( $items );
            $box = array();//盒 子数组
            for ( $itemindex = 0; $itemindex < $item_count; $itemindex++ ) {
                $_box_index = false;
                $_box_count = count( $box );
                for ( $box_index = 0; $box_index < $_box_count; $box_index++ ) {
                    if ( $box[$box_index]['volume'] + $items[$itemindex] <= $box_volume_count ) {
                        $_box_index = $box_index;
                        break;
                    }
                }
                if ( $_box_index === false ) {
                    $box[$_box_count]['volume'] = $items[$itemindex];
                    $box[$_box_count]['items'][] = $itemindex;
                    $box_count++;
                } else {

                    $box[$_box_index]['volume'] += $items[$itemindex];
                    $box[$_box_index]['items'][] = $itemindex;
                }
            }
            return $box;
        } catch (\Exception $e) {
            Log::error("Parcel::reRangeParcel() failed" . $e->getMessage());
        }
    }
}
