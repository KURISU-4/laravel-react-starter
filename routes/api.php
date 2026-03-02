<?php

use Illuminate\Support\Facades\Route;

Route::get('/products', function () {
    return response()->json([
        ['id' => 1, 'name' => 'Product 1', 'price' => 10],
        ['id' => 2, 'name' => 'Product 2', 'price' => 20],
        ['id' => 3, 'name' => 'Product 3', 'price' => 30],
    ]);
});