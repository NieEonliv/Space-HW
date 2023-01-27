<?php

namespace App\Http\Controllers\Galaxy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteController extends Controller
{
    public function __invoke($url)
    {
        DB::delete('delete from galaxies where url = :url', ['url' => $url]);
    }
}
