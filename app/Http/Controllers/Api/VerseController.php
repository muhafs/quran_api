<?php

namespace App\Http\Controllers\Api;

use App\Models\Verse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\VerseResource;

class VerseController extends Controller
{
    public function verse($chapterID, $verseID)
    {
        $verse = Verse::with('chapter')->where('chapter_id', $chapterID)->where('number', $verseID)->first();

        return new VerseResource($verse);
    }
}
