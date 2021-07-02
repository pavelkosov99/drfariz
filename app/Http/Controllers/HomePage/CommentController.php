<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\HomePageComment;

class CommentController extends Controller
{

    public function index(HomePageComment $model)
    {
        $comments = $model->query()->orderBy('updated_at', 'desc')->get();

        return view('pages.layouts.home_page.comment.index')->with(compact('comments'));
    }
}
