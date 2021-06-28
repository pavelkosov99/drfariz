<?php

namespace App\Http\Controllers\Admin\HomePage;

use App\Http\Controllers\Controller;
use App\Models\HomePageWelcome;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(HomePageWelcome $model)
    {
        $welcome = $model->query()->where('id', 1)->get();

        return view('admin.home_page.welcome.index')->with(compact('welcome'));
    }

    public function store(HomePageWelcome $model, Request $request): RedirectResponse
    {
        if ($model->query()->where('id', 1)->get()->count() === 1){
            $request->validate([
                'title' => ['required'],
                'subtitle' => ['required'],
                'text' => ['required'],
            ]);
        }

        $request->validate([
            'title' => ['required'],
            'subtitle' => ['required'],
            'text' => ['required'],
            'image' => ['required']
        ]);

        $model->updateOrCreate(
            [
                'id' => 1
            ],
            [
                'title' => $request->input('title'),
                'subtitle' => $request->input('subtitle'),
                'text' => $request->input('text'),
                'image' => $request->input('images'),
            ]
        );

        return redirect()->back()->with('success', 'Element has been updated');
    }
}
