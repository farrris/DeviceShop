<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Device;
use App\Models\Type;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request) {
        $types = Type::all();
        $brands = Brand::all();
        $devices = Device::all();

        if($request->filled('brand')) {
            $brand = Brand::where('name', $request->get('brand'))->first();
            $devices = $devices->where('brand_id', $brand->id);
        }

        if($request->filled('type')) {
            $type = Type::where('name', $request->get('type'))->first();
            $devices = $devices->where('type_id', $type->id);
        }

        $data = [
            'types' => $types,
            'brands' => $brands,
            'devices' => $devices
        ];

        return view('index', $data);
    }

    public function device($id) {
        $device = Device::find($id);
        $device_infos = $device->device_infos;
        $data = [
            'device' => $device,
            'device_infos' => $device_infos
        ];
        return view('device', $data);
    }
}
