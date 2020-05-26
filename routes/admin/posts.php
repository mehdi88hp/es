<?php
Route::group(['middleware' => ['web', 'panel'], 'namespace' => '\Kaban\Components\Admin\Posts\Controllers'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::group(['prefix' => 'contents', 'as' => 'admin.contents.'], function () {
            //Airlines
            Route::get('posts/index', [
                'as' => 'posts.index',
                'uses' => 'PostsController@index'
            ]);
        });
    });
});
