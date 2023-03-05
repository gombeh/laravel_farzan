<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MotorbikeRequest;
use App\Models\Motorbike;
use Illuminate\Http\Request;

class MotorbikeController extends Controller
{
    public function create() {
        return view('admin.motorbikes.create');
    }

    public function store(MotorbikeRequest $request) {
        $image_path  = $request->file('image')->store('images');
        $request->merge(['image_path' => $image_path]);
        Motorbike::create($request->only('model', 'color', 'weight', 'price', 'image_path'));
        return back()->with(['success' => 'Motorbike created successfully']);
    }
}
