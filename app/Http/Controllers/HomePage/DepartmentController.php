<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\HomePageDepartment;

class DepartmentController extends Controller
{
    public function index(HomePageDepartment $model)
    {
        $departments = $model->query()->orderBy('updated_at', 'desc')->get();

        return view('pages.layouts.home_page.department.index')->with(compact('departments'));
    }

    public function show(HomePageDepartment $model, $id)
    {
        $department = $model->query()->findOrFail($id);

        return view('pages.layouts.home_page.department.show')->with(compact('department'));
    }

}
