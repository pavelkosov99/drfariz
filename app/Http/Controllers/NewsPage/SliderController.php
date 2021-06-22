<?php

namespace App\Http\Controllers\NewsPage;

use App\Http\Controllers\Controller;
use App\Http\Modules\SaveModule;
use App\Http\Requests\HomePageSliderRequest;
use App\Models\HomePageSlider;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class SliderController extends Controller
{
    public function index()
    {
        $sliders = HomePageSlider::query()->orderBy('updated_at', 'desc')->get();

        return view('admin.home_page.slider.slider')->with(compact('sliders'));
    }

    public function create()
    {
        return view('admin.home_page.slider.create');
    }

    public function store(HomePageSliderRequest $request, HomePageSlider $model)
    {

        $fullPath = Storage::putFile(
            'uploads/images/' . substr(strrchr(static::class, '\\'), 1) . '/' . Carbon::now()->toDateString(),
            $request->file('image')
        );

        $model->title = $request->input('title');
        $model->subtitle = $request->input('subtitle');
        $model->text = $request->input('text');
        $model->image = $fullPath;
        $model->save();

        return redirect()->back()->with('success', 'Element has been created');
    }

    public function show($id)
    {
        $slide = HomePageSlider::query()->findOrFail($id);

        return view('admin.home_page.slider.show')->with(compact('slide'));
    }

    public function edit($id)
    {
        $slide = HomePageSlider::query()->findOrFail($id);

        return view('admin.home_page.slider.slider')->with(compact('slide'));
    }

    public function update(HomePageSliderRequest $request, HomePageSlider $model, $id)
    {

        $slide = $model->findOrFail($id);

        unlink(public_path($slide->image));

        $fullPath = Storage::putFile(
            'uploads/images/' . substr(strrchr(static::class, '\\'), 1) . '/' . Carbon::now()->toDateString(),
            $request->file('image')
        );

        $slide->title = $request->input('title');
        $slide->subtitle = $request->input('subtitle');
        $slide->text = $request->input('text');
        $slide->image = $fullPath;
        $slide->save();

        return redirect()->back()->with('success', 'Element has been updated successfully');
    }

    public function destroy($id, HomePageSlider $model)
    {
        $imageName = $model->find($id)->image;
        $imageFullPath = '/uploads/news/images/'.$imageName;
        unlink(public_path($imageFullPath));

        $model->findOrFail($id)->delete();

        return redirect()->route('news-all-dashboard')->with('success', 'News have been deleted');
    }
}
