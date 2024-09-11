<?php

require __DIR__.'/../vendor/autoload.php';

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use Maestroerror\HeicToJpg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

Route::post('/', function(Request $request) {
    if ($request->hasFile('photo')) {

        $file = $request->photo;

        $filename = $file->getClientOriginalName();

        $extension = $file->getClientOriginalExtension();

        $file->storeAs('images', $filename);

        // return storage_path('app/images') . '/' . $filename;

        $jpeg = HeicToJpg::convert(storage_path('app/images') . '/' . $filename)->get();

        Storage::put($filename . '.jpg', $jpeg);

    }
});
