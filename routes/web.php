<?php

use App\Http\Controllers\FooController;
use Illuminate\Support\Facades\Route;

Route::get('/foo', FooController::class);

Route::get('/inertia/playground', function () {
    return inertia('Playground/Index', [
        'greeting' => 'John',
        'loginRoute' => route('filament.auth.login')
    ]);
});
