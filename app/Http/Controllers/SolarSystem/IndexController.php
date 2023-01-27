<?php

namespace App\Http\Controllers\SolarSystem;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __invoke($url)
    {
        $id = DB::select('select id from galaxies where url = :url',['url' => $url])[0]->id;
        return DB::select('select id, description, image, title from solar_systems where galaxy_id = :id', ['id' => $id]);
    }
}
