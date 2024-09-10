<?php

require __DIR__.'/../vendor/autoload.php';

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;

Route::post('/', function() {
    if ($request->hasFile('photo')) {
        $image = $request->photo;
        return $image->path();
    }
    $manager = new ImageManager(new Driver());
});
