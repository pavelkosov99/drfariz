<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\HomePageSlider;


class SliderController extends Controller
{
    public function index(HomePageSlider $model)
    {
        $sliders = $model->query()->orderBy('updated_at', 'desc')->get();

        return view('pages.layouts.home_page.slider.index')->with(compact('sliders'));
    }

    public function show(HomePageSlider $model, $id)
    {
        $slide = $model->query()->findOrFail($id);

        return view('pages.layouts.home_page.slider.show')->with(compact('slide'));
    }
}
