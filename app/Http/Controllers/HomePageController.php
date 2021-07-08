<?php

namespace App\Http\Controllers;

use App\Models\HomePageComment;
use App\Models\HomePageDepartment;
use App\Models\HomePageExpert;
use App\Models\HomePageSlider;
use App\Models\HomePageSpeciality;
use App\Models\HomePageWelcome;

class HomePageController extends Controller
{
    public function index(HomePageSlider $homePageSlider, HomePageSpeciality $homePageSpeciality, HomePageWelcome $homePageWelcome,
                          HomePageDepartment $homePageDepartment, HomePageComment $homePageComment, HomePageExpert $homePageExpert)
    {
        $sliders = $homePageSlider->query()->orderBy('updated_at', 'desc')->get();

        $speciality = $homePageSpeciality->query()->where('id', 1)->get();

        $welcome = $homePageWelcome->query()->where('id', 1)->get();

        $departments = $homePageDepartment->query()->orderBy('updated_at', 'desc')->get();

        $comments = $homePageComment->query()->orderBy('updated_at', 'desc')->get();

        $experts = $homePageExpert->query()->orderBy('updated_at', 'desc')->get();

        return view('pages.index')->with(compact('sliders','speciality','welcome','departments','comments','experts'));
    }
}
