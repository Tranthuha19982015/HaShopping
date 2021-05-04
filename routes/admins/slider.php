<?php

//Sliders
Route::prefix('slider')->group(function () {
    Route::get('/',
        [
            'as' => 'slider.index',
            'uses' => 'AdminSliderController@index',
            'middleware' => 'can:slider-list'
        ]);
    Route::get('/create',
        [
            'as' => 'slider.create',
            'uses' => 'AdminSliderController@create',
            'middleware' => 'can:slider-add'
        ]);
    Route::post('/store',
        [
            'as' => 'slider.store',
            'uses' => 'AdminSliderController@store'
        ]);
    Route::get('/edit/{id}',
        [
            'as' => 'slider.edit',
            'uses' => 'AdminSliderController@edit',
            'middleware' => 'can:slider-edit'
        ]);
    Route::post('/update/{id}',
        [
            'as' => 'slider.update',
            'uses' => 'AdminSliderController@update'
        ]);
    Route::get('/delete/{id}',
        [
            'as' => 'slider.delete',
            'uses' => 'AdminSliderController@delete',
            'middleware' => 'can:slider-delete'
        ]);
});
