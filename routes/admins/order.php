<?php

Route::prefix('orders')->group(function () {
    Route::get('/',
        [
            'as' => 'orders.index',
            'uses' => 'AdminOrderController@index',
            'middleware' => 'can:order-list'
        ]);

    Route::get('/detail/{id}',
        [
            'as' => 'orders.detail',
            'uses' => 'AdminOrderController@detail',
            'middleware' => 'can:order-detail'
        ]);
});
