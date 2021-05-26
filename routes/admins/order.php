<?php

Route::prefix('orders')->group(function () {
    Route::get('/',
        [
            'as' => 'orders.index',
            'uses' => 'AdminOrderController@index'
        ]);

    Route::get('/detail/{id}',
        [
            'as' => 'orders.detail',
            'uses' => 'AdminOrderController@detail'
        ]);
});
