<?php

namespace App\Http\Controllers;

use App\Models\HomePageSlider;

class HomePageController extends Controller
{
    public function index(HomePageSlider $model)
    {
        $sliders = $model->query()->orderBy('updated_at', 'desc')->get();

        $speciality = $model->query()->where('id', 1)->get();

        $welcome = $model->query()->where('id', 1)->get();

        $departments = $model->query()->orderBy('updated_at', 'desc')->get();

        $comments = $model->query()->orderBy('updated_at', 'desc')->get();

        $experts = $model->query()->orderBy('updated_at', 'desc')->get();

        return view('pages.index')->with(compact('sliders','speciality','welcome','departments','comments','experts'));
    }
}
