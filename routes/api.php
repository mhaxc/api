<?php

use App\Http\Controllers\BulkController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StockLocationController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TypePaymentController;
//use App\Http\Controllers\UserHasCustomerController;
//use App\Http\Controllers\AlternativeUnitController;
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

 // bulks
 Route::resource('bulks', BulkController::class);

 // products
 Route::resource('products', ProductsController::class);



 //categories
 Route::resource('categories', CategoryController::class);



 //customers
 Route::resource('customers', CustomerController::class);


 //stocks_locations
 Route::resource('stocks_locations', StockLocationController::class);



 //stocks
 Route::get('stocks', [StockController::class, 'index']);

 //users
 Route::resource('users', UserController::class);


 //type_payments
 Route::resource('type_payments', TypePaymentController::class);


//orders

Route::resource('orders', OrderController::class);
 //Route::get('orders', [OrderController::class, 'index']);
 //Route::get('orders/{id}', [OrderController::class, 'show']);
 // tentativa de fazer aparecer 1 item de 1 pedido
 //Route::get('orders/{id}/items/{products_id}', [OrderController::class, 'showItemOrder']);
 //Route::post('orders', [OrderController::class, 'store']);
 //tentativa de incluir item em um pedido
 //Route::post('orders/{id}/items', [OrderController::class, 'StoreAddItem']);
 //tentativa de criar um metodo para deletar 1 item em um pedido
 //Route::delete('orders/{id}/items/{products_id}', [OrderController::class, 'deleteItem']);
 //Route::put('orders/{id}', [OrderController::class, 'update']);
 //Route::delete('orders/{id}', [OrderController::class, 'delete']);

 //orders_items
 //Route::get('orders_items', [OrderItemController::class, 'index']);
 //Route::get('orders_items/{seq}', [OrderItemController::class, 'show']);
 //Route::post('orders_items', [OrderItemController::class, 'store']);
 //Route::put('orders_items/{seq}', [OrderItemController::class, 'update']);
