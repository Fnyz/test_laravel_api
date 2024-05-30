<?php
use App\Events\TrackBroadcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/broadcastTest', function (Request $request) {
    event(new TrackBroadcast($request->all()));
    return response()->json([
        'message' => 'Broadcast sent successfully!'
    ], 200);
});
