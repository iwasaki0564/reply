<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;

Route::get('/',[TemplateController::class, 'index'])->name('templates.index');
Route::get('/create', [TemplateController::class, 'createView'])->name('templates.create');
Route::post('/create', [TemplateController::class, 'create']);
Route::get('/edit/{id}',[TemplateController::class, 'editView'])->name('templates.edit');
Route::post('/edit',[TemplateController::class, 'edit']);
Route::post('/delete/{id}',[TemplateController::class, 'delete']);
