<?php
namespace App\Http\Controllers;
// namespace App\Http\Controllers\MainController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello/world', [MainController::class, 'sayHi']);
Route::get('/sayname/{name}', [MainController::class, 'sayMyName']);


Route::get('/hello',function(){
    return ['name' => 'world'];
});

Route::get('/hello/{world}',function($world){
    // echo "Hello World";
    return view("info",[
        'name' => $world,
        'time' => time()
    ]);
});

Route::get('/hello/{name}',function($worldName){
    $worldName = ucwords($worldName);
    echo "Hello {$worldName}";
});


Route::get('/greet/{greetings}/name/{name}',function($greetings,$worldName){
    $worldName = ucwords($worldName);
    $greetings = ucwords($greetings);
    echo "{$greetings} {$worldName}";
});


Route::post('/say',function(Request $request){
    // $greeting = $request->post('greeting'); //HTTP POST VERB
    // $all = $request->all();
    // echo $all['name'] $all['greeting'];
    // echo "Hello {$newName}";

    $newName = $request->post('name'); //HTTP POST VERB
    $greetings = $request->post('greetings'); //HTTP POST VERB
    return view("info",[
        'name' => $newName,
        'greet' => $greetings,
        // 'time' => time()
    ]);
});


Route::get('/',[MainController::class,'main']);
Route::get('/features',[MainController::class,'features']);
Route::get('/contact',[MainController::class,'contact']);
Route::get('/allpeople',[MainController::class,'allpeople']);
Route::get('/test',[MainController::class,'testModel']);
Route::get('/form',[FormController::class,'displayForm'])->name("form.create");
Route::post('/save',[FormController::class,'saveForm'])->name("form.save");
