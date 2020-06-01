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

Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]);

Route::get('/add-to-cart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);

Route::get('/view-datails/{id}', [
    'uses' => 'ProductController@getDetails',
    'as' => 'product.details'
]);

Route::get('/shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart'
]);

Route::get('/checkout', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout'
]);

Route::post('/checkout', [
    'uses' => 'ProductController@postCheckout',
    'as' => 'checkout'
]);

/*Stripe Routes */
Route::get('stripe', [
    'uses' => 'StripeController@getStripe',
    'as' => 'stripe'
]);

Route::post('stripe', [
    'uses' => 'StripeController@postStripe',
    'as' => 'stripe'
]);

Route::group(['prefix' => 'user'], function () {
    Route::group(['middleware' => ['guest']], function () {

        Route::get('/signup', [
            'uses' => 'UserController@getSignup',
            'as' => 'user.signup'
        ]);

        Route::post('/signup', [
            'uses' => 'UserController@postSignup',
            'as' => 'user.signup'
        ]);

        Route::get('/signin', [
            'uses' => 'UserController@getSignin',
            'as' => 'user.signin'

        ]);

        Route::post('/signin', [
            'uses' => 'UserController@postSignin',
            'as' => 'user.signin'
        ]);
    });

    Route::group(['middleware' => ['auth']], function () {

        Route::get('/profile', [
            'uses' => 'UserController@getProfile',
            'as' => 'user.profile'
        ]);

        Route::get('/logout', [
            'uses' => 'UserController@getLogout',
            'as' => 'user.logout'
        ]);
    });


});



/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/products',                               'Admin\ProductsController@index');
    Route::get('/admin/products/create',                        'Admin\ProductsController@create');
    Route::post('/admin/products',                              'Admin\ProductsController@store');
    Route::get('/admin/products/{product}/edit',                'Admin\ProductsController@edit')->name('admin/products/edit');
    Route::post('/admin/products/bulk-destroy',                 'Admin\ProductsController@bulkDestroy')->name('admin/products/bulk-destroy');
    Route::post('/admin/products/{product}',                    'Admin\ProductsController@update')->name('admin/products/update');
    Route::delete('/admin/products/{product}',                  'Admin\ProductsController@destroy')->name('admin/products/destroy');
    Route::get('/admin', function () {
        return view('admin.hello');
    });
    Route::get('admin/profile', function() {
        return view('admin.profile');
    });
});

