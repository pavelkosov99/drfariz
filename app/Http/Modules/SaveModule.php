<?php


namespace App\Http\Modules;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SaveModule
{
    public function saveImage(Request $request, Model $model, $folderName): bool
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $time = Carbon::now()->toDateString();
            $path = 'uploads/images/' . $folderName . '/' . $time;
            $imageName = $time . uniqid('', true) . $image->getClientOriginalName();
            $fullPath = $path . '/' . $imageName;

            if (!File::exists($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            $request->image->move($path, $imageName);
            $model->image = $fullPath;

            return true;
        }

        return false;
    }
}
