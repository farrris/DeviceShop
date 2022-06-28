<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\BasketDevice;
use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function basket() {

        if (Basket::where('user_id', Auth::user()->id)->first() === null) {
            Basket::create([
               'user_id' => Auth::user()->id
            ]);
        }

        $basket = Basket::where('user_id', Auth::user()->id)->first();
        $basket_devices = BasketDevice::all()->where('basket_id', $basket->id);

        $basket_devices_view = [];

        foreach($basket_devices as $basket_device) {
            array_push($basket_devices_view, $basket_device->device()->get());
        }

        $data = [
            'basket_devices' => $basket_devices_view
        ];

        return view('basket', $data);
    }

    public function add(Request $request, $id) {
        if (Basket::where('user_id', Auth::user()->id)->first() === null) {
            Basket::create([
               'user_id' => Auth::user()->id
            ]);
        }

        $basket = Basket::where('user_id', Auth::user()->id)->first();

        $device = Device::where('id', $id)->first();

        $basket_device = BasketDevice::create([
            'basket_id' => $basket->id,
            'device_id' => $device->id
        ]);


        return redirect("/basket");
    }

    public function buy() {
        if (Basket::where('user_id', Auth::user()->id)->first() === null) {
            return abort(404);
        }

        $basket = Basket::where('user_id', Auth::user()->id)->first();
        $basket_devices = BasketDevice::where('basket_id', $basket->id)->delete();

        return redirect('/basket');

    }
}
