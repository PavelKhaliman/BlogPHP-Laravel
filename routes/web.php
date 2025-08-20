<?php

use App\Http\Controllers\Blog\IndexController as BlogIndexController;
use App\Http\Controllers\Blog\ShowController as BlogShowController;
use App\Http\Controllers\Main\IndexController as MainIndexController;
use App\Http\Controllers\Cv\IndexController as CvIndexController;
use App\Http\Controllers\MyProject\IndexController as MyProjectIndexController;
use App\Http\Controllers\Contact\IndexController as ContactIndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

Auth::routes(['verify' => true]);

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route('main.index');
})->middleware(['auth','signed','throttle:6,1'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('status', 'verification-link-sent');
})->middleware(['auth','throttle:6,1'])->name('verification.send');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('status', 'verification-link-sent');
})->middleware(['auth','throttle:6,1'])->name('verification.send');

// Main page at root
Route::get('/', MainIndexController::class)->name('main.index');


// CV / MyProject / Contact pages
Route::get('/cv', CvIndexController::class)->name('cv.index');
Route::get('/my-project', MyProjectIndexController::class)->name('myproject.index');
Route::get('/contact', ContactIndexController::class)->name('contact.index');

// routes/web.php


// Blog routes under /blog
Route::group(['prefix' => 'blog'], function () {
    Route::get('/', BlogIndexController::class) -> name('blog.index');
    Route::get('/{post}', BlogShowController::class) -> name('blog.show');
});

Route::group(['namespace'=> 'App\Http\Controllers\Personal', 'prefix' =>'personal','middleware' => ['auth','personal','verified']],function(){

    Route::group(['namespace'=>'Main', 'prefix' =>'main'],function(){
        Route::get('/', 'IndexController')->name('personal.main.index');
    });
    Route::group(['namespace'=>'Liked','prefix' =>'liked'],function(){
        Route::get('/', 'IndexController')->name('personal.liked.index');
        Route::delete('/{post}', 'DeleteController')->name('personal.liked.delete');
    });
    Route::group(['namespace'=>'Comment','prefix' =>'comment'],function(){
        Route::get('/', 'IndexController')->name('personal.comment.index');
        Route::get('/{comment}/edit', 'EditController')->name('personal.comment.edit');
        Route::patch('/{comment}', 'UpdateController')->name('personal.comment.update');
        Route::delete('/{comment}', 'DeleteController')->name('personal.comment.delete');
    });
});

// Redirect /personal to /personal/main for convenience
Route::redirect('/personal', '/personal/main');


Route::group(['namespace'=> 'App\Http\Controllers\Admin', 'prefix' =>'admin','middleware' => ['auth','admin','verified']],function(){

    Route::group(['namespace'=>'Main'],function(){
        Route::get('/', 'IndexController')->name('admin.main.index');
    });

    Route::group(['namespace'=>'Post', 'prefix'=>'posts'],function(){
        Route::get('/', 'IndexController')->name('admin.post.index');
        Route::get('/create', 'CreateController')->name('admin.post.create');
        Route::post('/', 'StoreController')->name('admin.post.store');
        Route::get('/{post}', 'ShowController')->name('admin.post.show');
        Route::get('/{post}/edit', 'EditController')->name('admin.post.edit');
        Route::patch('/{post}', 'UpdateController')->name('admin.post.update');
        Route::delete('/{post}', 'DeleteController')->name('admin.post.delete');
    });

    Route::group(['namespace'=>'Category', 'prefix'=>'categories'],function(){
        Route::get('/', 'IndexController')->name('admin.category.index');
        Route::get('/create', 'CreateController')->name('admin.category.create');
        Route::post('/', 'StoreController')->name('admin.category.store');
        Route::get('/{category}', 'ShowController')->name('admin.category.show');
        Route::get('/{category}/edit', 'EditController')->name('admin.category.edit');
        Route::patch('/{category}', 'UpdateController')->name('admin.category.update');
        Route::delete('/{category}', 'DeleteController')->name('admin.category.delete');
    });

    Route::group(['namespace'=>'Tag', 'prefix'=>'tags'],function(){
        Route::get('/', 'IndexController')->name('admin.tag.index');
        Route::get('/create', 'CreateController')->name('admin.tag.create');
        Route::post('/', 'StoreController')->name('admin.tag.store');
        Route::get('/{tag}', 'ShowController')->name('admin.tag.show');
        Route::get('/{tag}/edit', 'EditController')->name('admin.tag.edit');
        Route::patch('/{tag}', 'UpdateController')->name('admin.tag.update');
        Route::delete('/{tag}', 'DeleteController')->name('admin.tag.delete');
    });
    Route::group(['namespace'=>'User', 'prefix'=>'users'],function(){
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/create', 'CreateController')->name('admin.user.create');
        Route::post('/', 'StoreController')->name('admin.user.store');
        Route::get('/{user}', 'ShowController')->name('admin.user.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'DeleteController')->name('admin.user.delete');
    });



});



