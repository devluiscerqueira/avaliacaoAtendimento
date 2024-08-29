<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\RelatorioAvaliacaoController;


Route::get('/avaliacao/create', [AvaliacaoController::class, 'create'])->name('avaliacoes.create');
Route::post('/avaliacao', [AvaliacaoController::class, 'store'])->name('avaliacoes.store');
Route::get('/relatorio', [RelatorioAvaliacaoController::class, 'index'])->name('relatorio.index');
Route::get('/agradecimento', function() {
    return view('template/agradecimento', ['title' => 'Pesquisa de Satisfação']);
})->name('agradecimento');
