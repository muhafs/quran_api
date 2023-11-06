<?php

namespace App\Http\Controllers\Api;

use App\Models\Chapter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ChaptersListResource;

class ChapterController extends Controller
{
    public function index()
    {
        $chapters = Chapter::orderBy('number', 'asc')->paginate(15);

        return ChaptersListResource::collection($chapters);
    }
}
