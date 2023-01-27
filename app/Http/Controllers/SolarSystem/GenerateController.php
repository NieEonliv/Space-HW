<?php

namespace App\Http\Controllers\SolarSystem;

use App\Http\Controllers\Controller;
use App\Models\SolarSystem;
use Illuminate\Http\Request;

class GenerateController extends Controller
{
    public function __invoke()
    {
        SolarSystem::factory(30)->create();
    }
}
