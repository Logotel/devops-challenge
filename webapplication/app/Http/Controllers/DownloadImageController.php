<?php

namespace App\Http\Controllers;

use Faker\Generator as Faker;

class DownloadImageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Faker $faker)
    {
        $faker->image(storage_path('media'), 500, 500);

        return response()->noContent();

    }
}
