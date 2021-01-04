<?php
Route::middleware(['api','before'])
    ->namespace('\Mugaco\Pack')
    ->prefix('api/v1/pack')
    ->group(function () {
        Route::get('/', 'PackController@index');
    });
