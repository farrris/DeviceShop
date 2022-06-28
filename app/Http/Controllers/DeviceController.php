<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Device;
use App\Models\Type;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function create(Request $request) {
        $request->validate([
            'type' => 'required',
            'brand' => 'required',
            'name' => 'required',
            'price' => 'required',
            'img' => 'required'
        ]);

        $file = $request->file('img');
        $upload_folder = '/images/devices';
        $filename = $file->getClientOriginalName();

        $file->move(public_path() . $upload_folder, $filename);

        $type = Type::where("name", $request->type)->first();
        $request["type_id"] = $type->id;

        $brand = Brand::where("name", $request->brand)->first();
        $request["brand_id"] = $brand->id;

        Device::create($request->all())->update(['img' => $filename]);

        return redirect('admin')->with('success', 'Device created successfully');

    }
}
