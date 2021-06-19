<?php

namespace App\Http\Controllers\NewsPage;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomePageSliderRequest;
use App\Models\HomePageSlider;

class SliderController extends Controller
{
    public function index()
    {
        return view('admin.home_page.slider.slider');
    }

    public function create()
    {
        return view('admin.home_page.slider.add-slide');
    }

    public function store(HomePageSliderRequest $request)
    {
        $create = HomePageSlider::create($request->validated());

        if(!$create){
            return redirect()->back()->with('error', 'Element has not been created');
        }
        return redirect()->route('home-page-slider.create')->with('success', 'Element has been created');
    }

    public function show($id)
    {
        $slide = HomePageSlider::query()->findOrFail($id);

        return view('admin.home_page.slider.slider')->with(compact('slide'));
    }

    public function edit($id)
    {

    }

    public function update(HomePageSliderRequest $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
