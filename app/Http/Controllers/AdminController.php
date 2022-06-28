<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Type;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin() {

        $types = Type::all();
        $brands = Brand::all();

        $data = [
            'types' => $types,
            'brands' => $brands
        ];
        return view('admin', $data);
    }
}
