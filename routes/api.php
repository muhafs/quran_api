<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\JuzController;
use App\Http\Controllers\Api\VerseController;
use App\Http\Controllers\Api\ChapterController;

Route::controller(ChapterController::class)->group(function () {
    Route::get('chapters', 'chapters');
    Route::get('chapters/{chapterID}', 'chapter');
});

Route::controller(VerseController::class)->group(function () {
    Route::get('chapters/{chapterID}/{verseID}', 'verse');
});

Route::controller(JuzController::class)->group(function () {
    Route::get('juz', 'ajza');
    Route::get('juz/{juzID}', 'juz');
});
