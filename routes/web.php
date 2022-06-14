<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Articles;
use App\Http\Controllers\LikeAndDislike;

Route::get('/', function () {

    if(Session::get('username') == null){

        return view('login')->with('check', Session::get('check'));

    }else{

        return redirect()->route('check.db');
        
    }

})->name('index');

Route::post('/home', [Controller::class, 'check_login'])->name('check.db');

Route::get('/home', function(){

    return Controller::check_logged('home');

})->name('view.home');

Route::get('crypto', function(){

    return Controller::check_logged('crypto');

});

Route::get('stocks', function(){

    return Controller::check_logged('stocks');

});

Route::get('business', function(){

    return Controller::check_logged('business');

});

Route::get('music', function(){

    return Controller::check_logged('music');

});

Route::get('/register', function(){

    return view('register');

})->name('view.register');

Route::post('register/index', [Controller::class, 'register'])->name('register');


Route::get('/delete', function(){

    if(Session::get('username') == null){

        return redirect()
            ->route('index')
            ->with('check', Session::get('check'));

    }else{

        return view('delete')
            ->with('check', Session::get('check'));

    }

})->name('view.delete');;

Route::post('delete/index', [Controller::class, 'delete'])->name('delete');

//user
Route::get('logout', [Controller::class, 'logout'])->name('logout');

Route::get('search', [Articles::class, 'allArticle']);

Route::get('like_post/{post_id}', [LikeAndDislike::class, 'like_post']);

Route::get('dislike_post/{post_id}', [LikeAndDislike::class, 'dislike_post']);

Route::get('check_liked', [LikeAndDislike::class, 'check_liked']);

//admin
Route::get('upload', function(){

    if(Session::get('username') != "root"){

        return redirect()
            ->route('index')
            ->with('check', Session::get('check'));

    }else{

        return view('upload')
        ->with('upload_check', Session::get('check'));

    }

})->name('view.upload');

Route::post('upload', [Controller::class, 'upload'])->name('upload.article');