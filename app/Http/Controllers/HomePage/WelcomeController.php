<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\HomePageWelcome;

class WelcomeController extends Controller
{
    public function index(HomePageWelcome $model)
    {
        $welcome = $model->query()->where('id', 1)->get();

        return view('pages.layouts.home_page.welcome.index')->with(compact('welcome'));
    }
}
