<?php

Route::prefix('orders')->group(function () {
    Route::get('/',
        [
            'as' => 'orders.index',
            'uses' => 'AdminOrderController@index'
        ]);
});
