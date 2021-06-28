<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\HomePageSpeciality;
use Illuminate\Http\Request;

class SpecialityController extends Controller
{
    public function index(HomePageSpeciality $model)
    {
        $speciality = $model->query()->where('id', 1)->get();

        return view('admin.home_page.speciality.index')->with(compact('speciality'));
    }

    public function store(HomePageSpeciality $model, Request $request)
    {
        $request->validate([
            'title_1' => ['required'],
            'subtitle_1' => ['required'],
            'title_2' => ['required'],
            'subtitle_2' => ['required'],
            'title_3' => ['required'],
            'subtitle_3' => ['required'],
        ]);

        //$speciality = $model->query()->where('id', 1)->get();

        if(is_null($model->query()->where('id', 1)->get()))
        {
            $model->title_1 = $request->input('title_1');
            $model->subtitle_1 = $request->input('subtitle_1');

            $model->title_2 = $request->input('title_2');
            $model->subtitle_2 = $request->input('subtitle_2');

            $model->title_3 = $request->input('title_3');
            $model->subtitle_3 = $request->input('subtitle_3');

            $model->save();

            return redirect()->back()->with('success', 'Element has been created');
        }

        $speciality = $model->findOrFail(1);

        $speciality->title_1 = $request->input('title_1');
        $speciality->subtitle_1 = $request->input('subtitle_1');

        $speciality->title_2 = $request->input('title_2');
        $speciality->subtitle_2 = $request->input('subtitle_2');

        $speciality->title_3 = $request->input('title_3');
        $speciality->subtitle_3 = $request->input('subtitle_3');

        $speciality->save();

        return redirect()->back()->with('success', 'Element has been updated');
    }
}
