<?php

namespace App\Http\Controllers\Galaxy;

use App\Http\Controllers\Controller;
use App\Http\Requests\Galaxy\StoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data = (object) $data['galaxy'];
        DB::insert('insert into galaxies (title, description, image, url) values (?,?,?,?)', [$data->title, $data->description, $data->image, $data->url]);
    }
}
