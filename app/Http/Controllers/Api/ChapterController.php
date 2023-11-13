<?php

namespace App\Http\Controllers\Api;

use App\Models\Chapter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ChapterResource;
use App\Http\Resources\ChaptersListResource;

class ChapterController extends Controller
{
    public function chapters()
    {
        $chapters = Chapter::orderBy('number', 'asc')->paginate(15);

        return ChaptersListResource::collection($chapters);
    }

    public function chapter($chapterID)
    {
        $chapter = Chapter::with('verses')->find($chapterID);

        return new ChapterResource($chapter);
    }
}
