<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    global $users;
    return $users;
});
Route::get('/user',function(){
    global $users;
    $userName = [];
    foreach($users as $name){
        $userName[] = $name['name'];
    }
    $name = implode(', ', $userName);
    return 'The users name are: ' .$name.', ';
});
Route::get('api/user/{userIndex}', function($userIndex){
    global $users;
    if(isset($users[$userIndex])){
        return $users[$userIndex];
    }
    else{
        return 'can not find user index = '.$userIndex; 
    }
});
Route::get('user/{userName}', function($userName){
    global $users;
    foreach($users as $user){
        if($userName === $user['name']){
            return $user;
        }
    }
    if(isset($user)){
        return "'cannot find this user with name . $userName'";
    }
})->whereAlpha('userName');
Route::get('test', function(){
    return view('test');
});

Route::get('/test', function(){
   return view('test' , ['name' => 'ngan']);
});

Route::get('aboutme', [PagesController::class, 'aboutme']);

Route::get('/pnv', function(){
    return view('pnv', ['name' => 'nguyen ngan']);
})->name('pnv');
Route::get('/pnv1', function(){
    return view('pnv', ['name' => "<i> <span style='color:green'>nguyenngan</span> </i>"]);
})->name('pnv');

Route::get('/2',function(){
    return view('home',['title'=>'toidicode.com','alertMessage'=>'thong bao day']);
})->name('home');

Route::get('/3', function(){
    $posts =[
        ['name' => 'post1'],
        ['name' => 'post2'],
        ['name' => 'post3'],
        ['name' => 'post4'],
    ];
    return view('home',compact('posts'));
})->name('home');

Route::get('/ltview',function(){
    return view('shared.luyentapview');
});
Route::get('/ltblade',function(){
    return view('shared.dashboard');
});