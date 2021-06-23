<?php

namespace App\Http\Controllers\NewsPage;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomePageSliderRequest;
use App\Models\HomePageSlider;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;


class SliderController extends Controller
{
    public function index()
    {
        $sliders = HomePageSlider::query()->orderBy('updated_at', 'desc')->get();

        return view('admin.home_page.slider.index')->with(compact('sliders'));
    }

    public function create()
    {
        return view('admin.home_page.slider.create');
    }

    public function store(HomePageSliderRequest $request, HomePageSlider $model): RedirectResponse
    {

        $this->save($model, $request);

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

        return view('admin.home_page.slider.edit')->with(compact('slide'));
    }

    public function update(HomePageSliderRequest $request, HomePageSlider $model, $id): RedirectResponse
    {

        $slide = $model->findOrFail($id);

/*        if($slide->isDirty('image')){
            unlink($slide->image);
        }*/

        $this->save($slide, $request);

        return redirect()->back()->with('success', 'Element has been updated successfully');
    }

    public function destroy($id, HomePageSlider $model): RedirectResponse
    {
        $slide = $model->findOrFail($id);

        unlink($slide->image);

        $model->findOrFail($id)->delete();

        return redirect()->route('home-page-slider.index')->with('success', 'News have been deleted');
    }

    private function save($model, $request): void
    {
        $path = 'uploads/images/' . substr(strrchr(static::class, '\\'), 1) . '/' . Carbon::now()->toDateString();
        $fullPath = $request->file('image')->store($path, 'public');

        $model->title = $request->input('title');
        $model->subtitle = $request->input('subtitle');
        $model->text = $request->input('text');
        $model->image = "storage/" . $fullPath;
        $model->save();
    }
}
