<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\HomePageExpert;

class ExpertController extends Controller
{
    public function index(HomePageExpert $model)
    {
        $experts = $model->query()->orderBy('updated_at', 'desc')->get();

        return view('pages.layouts.home_page.expert.index')->with(compact('experts'));
    }

    public function show(HomePageExpert $model, $id)
    {
        $expert = $model->query()->findOrFail($id);

        return view('pages.layouts.home_page.expert.show')->with(compact('expert'));
    }
}
