<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Livewire\CreateArticle; // Importazione corretta del componente Livewire
use App\Livewire\EditArticle; // Importazione corretta del componente Livewire

Route::get('/', function () {
    return view('welcome');
});

// Rotte per l'ArticleController
Route::get('articles/create', CreateArticle::class)->name('articles.create');
Route::get('articles/index', [ArticleController::class, 'index'])->name('articles.index');
Route::get('articles/show/{article}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('articles/edit/{article}', EditArticle::class)->name('articles.edit'); // Usa il componente Livewire
