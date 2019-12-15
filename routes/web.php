<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {

    App\Jobs\SendMessage::withChain([
       new App\Jobs\PrepareJob('prepare...'),
       new App\Jobs\PublishJob('publish')
    ])->dispatch('start jobs');
 
});
