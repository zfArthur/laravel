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
//class Bar{
////    public $baz;
////    public function __construct(Baz $baz)
////    {
////        $this->bar = $baz;
////    }
//}

//
//class Foo{
//    public $bar;
//
//    public function __construct(Bar $bar)
//    {
//        $this->bar = $bar;
//
//    }
//
//}
// App::bind('Foo',function (){
//     dd(22222);
//     return new Foo(new Bar());
// });
//
//Route::get('/', function (Foo $foo) {
//    dd($foo);
////    return view('welcome');
//});


//Route::get('/',function (\App\Trade\Sale $trade){

//    Mailer::send();
    //ServiceProvider

//    dd(app()->make('files')->get(__DIR__.'/api.php'));

//    dd(app()['files']->get(__DIR__.'/api.php'));

//    $file= new \Illuminate\Filesystem\Filesystem(new Foo,new Bar );
//
//    dd($file->get(__DIR__.'/api.php'));
//
//    dd(app('files')->get(__DIR__.'/api.php'));

//    dd(app('Foo'));



//将我们自己写的函数绑定到ServiceProvider中

//$trade = app('trade');
//    dd($trade->exchange());
//
//});
//Auth::routes();
//
Route::get('/home', 'HomeController@index')->name('home');
