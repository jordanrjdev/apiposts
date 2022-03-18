<?php

use App\Http\Controllers\Api\V1\PostController as PostControllerV1;
use App\Http\Controllers\Api\V2\PostController as PostControllerV2;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/posts', PostControllerV1::class)->only(['index', 'show', 'destroy']);
Route::apiResource('v2/posts', PostControllerV2::class)->only(['index']);
