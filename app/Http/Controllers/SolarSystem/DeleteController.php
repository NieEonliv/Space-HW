<?php

namespace App\Http\Controllers\SolarSystem;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteController extends Controller
{
    public function __invoke($id)
    {
        DB::delete('delete from solar_systems where id = :id', ['id' => $id]);
    }
}
