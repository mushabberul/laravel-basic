<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function (Request $request) {

    // dd(
    //     'Dome and Die',
    //     $request->path(),
    //     // $request->input('name','default'),
    //     // $request->schemeAndHttpHost(),
    //     $request->fullUrl(),
    // );

    // $data = [
    //     'page_name' => 'Home Page',
    //     'name' => 'Sabbir Mia'
    // ];
    // return response($data)
    // ->header('content-type','aplication/json')
    // ->cookie('My_IDCard','Josim Khan',3600);

    // return redirect('/about-us');

    // dd($request->input('user_name'));
    return view('home',[
        'page_name' => 'Home Page',
        'name' => 'Sabbir Mia',

    ]);

})->name('home')->middleware("auth");
// Route::prefix('page')->name('laravel.')->group(function(){
//     Route::get('/',function(){
//         return view('home');
//     })->name('home');
//     Route::get('/about',function(){
//         return view('about');
//     })->name('about');
//     Route::get('/service',function(){
//         return view('service');
//     })->name('service');
// });
Route::get('login',function(){
    return 'login';
})->name('login');

Route::get('/about-us', function () {
    $page_name = 'About Page From Route';
    $product_count = "38";
    $color = '';
    $products = [
        1 =>[
            'name' => 'Bag',
            'color' => 'red',
            'price' => 34,
        ],
        2 =>[
            'name' => 'sunglass',
            'color' => 'yellow',
            'price' => 200,
        ],
        3 =>[
            'name' => 'BodySprae',
            'color' => 'red',
            'price' => 240,
        ],
    ];
    return view('about',compact('page_name','product_count','color','products'));
})->name('about');

Route::get('/service',function(){
    $services = ['Web Design','Web Development','App Development','Graph Design','Flutter Development'];
    $page_name = 'Service Name from route';
    return view('service',compact("services",'page_name'));
})->name('service');

// Route::get('/category/{category_name}',function($category_name){
//     echo $category_name;
// })->whereIn('category_name',['computer','laptop']);

// Route::get('/category/{category}', function ($category) {
//     return $category;
// })->whereIn('category', ['movie', 'song', 'painting']);

// Route::get('/category/{category_name}', function ($category_name){
//     return $category_name;
//     })->whereIn('category_name', ['electronics', 'movie', 'books', 'watch', 'laptop']);

Route::get('/search/{keywords}',function($keywores){
    echo $keywores;
})->where('keywords','.*');

Route::get('/send-me-details',function(Request $request){
    $sabbir_secret_key = 12345;
    $user_keys = $request->amar_key;

    $data = [

            'name'=>'sabbir',
            'dezignation'=>'Web Developer',
            'mobile'=>'0000',
            'acn'=>'sabbiraccount',

    ];

    if($sabbir_secret_key == $user_keys){
        return response()->json([
            'user_info' =>$data,
        ]);
    }else{
        return response([
            'Message' => 'Provide valid usr key',
        ]);
    }
});

Route::get('/test',function(Request $request){

    dd($request->all());
});
