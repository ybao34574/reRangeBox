<?php

namespace App\Http\Controllers;

use App\Models\Order;
use http\Env\Request;
use Illuminate\Support\Facades\Log;
use Psy\Util\Json;

class OrderController extends Controller
{
    public function index()
    {
        return view('products.index');//->with(['products' => $products]);
    }

    public function show($id)
    {
        return view('products.show');
    }

    public function store(Request $request)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getOrderList()
    {
        $orderList = new Json();
        try {
            $datas = Order::all();
        } catch (\Exception $e) {
            Log::error("OrderController::getOrderList() failed" . $e->getMessage());
        }

        return response()->json($orderList, 201);
    }

    /**
     * @param Order $orderDetail
     * @return \Illuminate\Http\JsonResponse
     */
    public function getOrderDetail(Order $orderDetail)
    {
        try {
        } catch (\Exception $e) {
            Log::error("OrderController::getOrderDetail() failed" . $e->getMessage());
        }

        return response()->json($orderDetail, 201);
    }
}
