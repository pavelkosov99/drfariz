<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\HomePageSpeciality;


class SpecialityController extends Controller
{
    public function index(HomePageSpeciality $model)
    {
        $speciality = $model->query()->where('id', 1)->get();

        return view('pages.layouts.home_page.speciality.index')->with(compact('speciality'));
    }
}
