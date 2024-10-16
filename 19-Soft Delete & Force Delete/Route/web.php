<?php

use App\Http\Controllers\PostController;


Route::resource('posts', PostController::class);

Route::get('trashed-posts', [PostController::class,'trashedPosts'])->name('trashed.post');

Route::get('/posts/{id}/restore',[PostController::class,'restore'])->name('posts.restore');

Route::delete('/posts/{id}/force-delete',[PostController::class,'force_delete'])->name('posts.forceDelete');


Route::get('/with-post',[PostController::class,'withTrashedPosts'])->name('with.post');