<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Motorbike;
use Illuminate\Http\Request;

class MotorbikeController extends Controller
{
    public function index(Request $request) {
        $selected_colors = json_decode($request->get('colors') ?? '');
        $motorbikes = Motorbike::when(!empty($selected_colors), function($query)use($selected_colors){
                $query->whereIn('color', $selected_colors);
            })
            ->when($request->get('sort'), function($query, $sort){
                $query->when($sort === 'latest', function($query){
                    $query->oldest();
                })
                ->when($sort === 'low_price', function($query){
                    $query->orderBy('price');
                })
                ->when($sort === 'max_price', function($query){
                    $query->orderBy('price', 'DESC');
                });
            })
            ->latest()
            ->paginate(5);
         $colors = Motorbike::select('color')->groupBy('color')->orderBy('color')->pluck('color');
        return view('front.motorbikes.index', compact('motorbikes', 'colors', 'selected_colors'));
    }

    public function show(Motorbike $motorbike){
        return view('front.motorbikes.show', compact('motorbike'));
    }
}
