<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\VerseController;
use App\Http\Controllers\Api\ChapterController;

Route::controller(ChapterController::class)->group(function () {
    Route::get('chapters', 'chapters');
    Route::get('chapters/{id}', 'chapter');
});

Route::controller(VerseController::class)->group(function () {
    Route::get('chapters/{chapterID}/{verseID}', 'verse');
});
