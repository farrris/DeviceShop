<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function create(Request $request) {
        $request->validate([
            'name' => 'required'
        ]);

        $brand = Brand::create($request->all());

        return redirect('/admin')->with('success','Brand created successfully.');
    }

}
