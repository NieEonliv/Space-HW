<?php

namespace App\Http\Controllers\Galaxy;

use App\Http\Controllers\Controller;
use App\Http\Requests\Galaxy\UpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request,$url)
    {
        $data = (object) $request->validated();
        DB::update('update galaxies set title = ?, description = ? where url = ?', [$data->title, $data->description, $url]);
    }
}
