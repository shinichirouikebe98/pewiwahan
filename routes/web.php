<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\CommentController;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');



Route::get('/Invitation', [InvitationController::class, 'index'])->name('invitation.index')->middleware('auth');
Route::post('/createInvitation', [InvitationController::class, 'store'])->name('invitation.store')->middleware('auth');
Route::get('/invitation/{id}/edit', [InvitationController::class, 'edit'])->name('invitation.edit')->middleware('auth');

Route::patch('/invitation/{invitation}', [InvitationController::class, 'update'])->name('invitation.update')->middleware('auth');

Route::delete('/invitation/{invitation}', [InvitationController::class, 'destroy'])->name('invitation.destroy')->middleware('auth');
Route::get('/{invitation:name}', [InvitationController::class, 'show'])->name('invitation.show');

// Tampilkan semua komentar (public)
Route::get('/', [CommentController::class, 'index'])->name('comment.index');

// Simpan komentar (public)
Route::post('/comments', [CommentController::class, 'store'])->name('comment.store');