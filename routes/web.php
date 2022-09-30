<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use \App\Http\Controllers\HomeController;


/*
   GET - Request a resource
   POST - Create a new resource
   PUT - Update a resource
   PATCH - Modify a resource
   DELETE -Delete a resource
   OPTIONS - Ask the server Which verbs are allowed
*/

// GET
Route::get('/blog', [PostsController::class, 'index']);
Route::get('/blog/{$id} ', [PostsController::class, 'show']);

//
//// POST
//Route::get('/blog/create', [PostsController::class, 'create']);
//Route::post('/blog/', [PostsController::class, 'store']);
//
//// PUT
//Route::get('/blog/edit/{$id}', [PostsController::class, 'edit']);
//Route::post('/blog/{$id}', [PostsController::class, 'update']);
//
//// DELETE
//Route::delete('/blog/{$id}', [PostsController::class, 'destroy']);
//
////Route::resource('blog', [PostsController::class]);
//
//// Route for invoke method
//Route::get('/', [HomeController::class, '_invoke']);


// Multiple HTTP verbs
//Route::match(['GET', 'POST'], '/blog', [PostsController::class, 'index']);
//Route::any('/blog', [PostsController::class, 'index']);

// Return view
//Route::view('/blog', 'blog.index', ['name' => 'Code with Dary']);


