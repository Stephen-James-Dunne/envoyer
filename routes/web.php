<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnvoyerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/all-projects', [EnvoyerController::class, 'getProjects'])->name('all-projects');
Route::get('/deployments/{projectId}', [EnvoyerController::class, 'listDeployments'])->name('deployments');
Route::get('/deploy-a-project', [EnvoyerController::class, 'getProjects'])->name('deploy-a-project');

Route::post('/deploy-project/{projectId}', [EnvoyerController::class, 'deployProject'])->name('deploy-project');
