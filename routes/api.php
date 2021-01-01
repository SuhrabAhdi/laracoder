<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('products',function(){
  $products = [
      [
          'id'=>1,
          'name'=>'Samsung mobile',
          'price'=>24000
      ],
      [
        'id'=>2,
        'name'=>'Apple mobile',
        'price'=>21000
    ],
    [
        'id'=>3,
        'name'=>'LG mobile',
        'price'=>28000
    ]
  ];
return json_encode($products);
});
