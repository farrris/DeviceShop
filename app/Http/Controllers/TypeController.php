<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function create(Request $request) {
        $request->validate([
            'name' => 'required'
        ]);

        Type::create($request->all());

        return redirect("/admin")->with('success','Type created successfully.');
    }
}
