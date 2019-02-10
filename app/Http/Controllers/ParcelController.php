<?php

namespace App\Http\Controllers;

use App\Models\Parcel;
use Illuminate\Support\Facades\Log;

class ParcelController extends Controller
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getParcelList()
    {

        return Parcel::all();
    }


    /**
     * @param Parcel $orderParcel
     * @return Parcel
     */
    public function getOrderParcel(Parcel $orderParcel)
    {

        return $orderParcel;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function reRangeParcel()
    {
        try {
            $reRangedList = Parcel::reRangeParcel();
        } catch (\Exception $e) {
            Log::error("ParcelController::getOrderParcel() failed" . $e->getMessage());
        }

        return response()->json($reRangedList, 201);
    }
}
