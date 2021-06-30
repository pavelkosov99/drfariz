<?php

namespace App\Http\Controllers\Admin\HomePage;

use App\Http\Controllers\Controller;
use App\Models\HomePageWelcome;
use Carbon\Carbon;
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
        $path = 'uploads/images/' . substr(strrchr(static::class, '\\'), 1) . '/' . Carbon::now()->toDateString();
        $welcome = $model->query()->where('id', 1)->get();

        if ($welcome->count() === 1 && !is_null($welcome->image)) {
            $request->validate([
                'title' => ['required'],
                'subtitle' => ['required'],
                'text' => ['required'],
            ]);

            if ($request->hasFile('image')) {
                unlink($welcome->image);

                $fullPath = $request->file('image')->store($path, 'public');
                $model->image = "storage/" . $fullPath;

                $array = array(
                    'title' => $request->input('title'),
                    'subtitle' => $request->input('subtitle'),
                    'text' => $request->input('text'),
                    'image' => $request->input('image')
                );
            } else {
                $array = array(
                    'title' => $request->input('title'),
                    'subtitle' => $request->input('subtitle'),
                    'text' => $request->input('text'),
                );
            }

            $model->updateOrCreate(
                [
                    'id' => 1
                ],
                [
                    $array
                ]
            );

            return redirect()->back()->with('success', 'Element has been updated');
        }

        if ($welcome->count() === 0) {
            $request->validate([
                'title' => ['required'],
                'subtitle' => ['required'],
                'text' => ['required'],
                'image' => ['required']
            ]);

            $fullPath = $request->file('image')->store($path, 'public');
            $model->image = "storage/" . $fullPath;

            $model->updateOrCreate(
                [
                    'id' => 1
                ],
                [
                    'title' => $request->input('title'),
                    'subtitle' => $request->input('subtitle'),
                    'text' => $request->input('text'),
                    'image' => $request->input('image'),
                ]
            );

            return redirect()->back()->with('success', 'Element has been updated');
        }

        return redirect()->back()->with('error', 'Element has not been updated');
    }
}
