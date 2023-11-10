<?php

namespace App\Http\Controllers\Api;

use App\Models\Juz;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\JuzListResource;

class JuzController extends Controller
{
    public function ajza()
    {
        $ajza = Juz::orderBy('number', 'asc')->get();

        return JuzListResource::collection($ajza);
    }

    public function juz()
    {
        //
    }
}
