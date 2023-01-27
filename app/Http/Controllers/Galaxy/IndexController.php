<?php

namespace App\Http\Controllers\Galaxy;

use App\Http\Controllers\Controller;
use App\Models\Galaxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __invoke()
    {
        return DB::select('select url, description, image, title from galaxies');
    }
}
