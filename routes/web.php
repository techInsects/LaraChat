<?php
Route::get('/logout', function () {
    Auth()->logout();
    return redirect('/home');
});
Route::get('/email_verify', function () {
    return view('auth.verify');
})->name('auth.verify');
Route::get('/password_reset_email', function () {
    return view('auth.passwords.email');
})->name('auth.passwords.email');
Route::get('/password_reset', function () {
    return view('auth.passwords.reset')->with(['token'=>'3r3kr3kjf3kj']);
})->name('auth.passwords.reset');

/////////////////////////////////////////////////////////////////////////

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home.index');

Route::get('/chat', 'ChatController@index')->name('chat.index');
