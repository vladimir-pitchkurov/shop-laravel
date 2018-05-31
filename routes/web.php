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

Route::get('/', ['as' => 'homepage', function () {
    $head = "New Title";
    return view('welcome',['title'=>$head]);
}]);


/*Route::resource('rest-pages', 'RestCtrl');*/


Route::get('first-ctrl', [ 'as' => 'first', 'uses' => 'FirstController@show']);





/*Route::group(['prefix' => 'admin'], function (){

    Route::get('page/add', function (){
        $routea = Route::current();

        echo "$routea->getName<br>";

        echo 'add-page group';



    })->name('admin-add');

    Route::get('page/back', function (){
        return redirect()->route('homepage');
    });

    Route::get('page/edit', function () {
        echo 'edit page group';
    });

});

Route::get('/second/{id}', ['as'=>'second', 'middleware' => 'mymiddle', function ($id) {

    echo '<a href="/">Back</a>';
    echo '<br>id = '.$id;

    return ;
}]);

Route::get('/page1', function () {
    echo '<a href="/">Home</a>';
    echo '<br>route(\'homepage\') = '.route('homepage');
    echo '<pre>';
    /*print_r($_ENV);*/
    /*echo config('app.locale');
    echo '<br>'.Config::get('app.locale');
    echo '<br>'.env('APP_KEY');
    echo '</pre>';
    return ;
});*/

Route::get('/shop', function () {
    return view('shop.index-shop');
});

Route::get('/shop2', ['uses' => 'FirstController@show']);
