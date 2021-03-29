<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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

    // csak létrehozza, nem adja hozzá a táblához
    //App\Models\Comment::factory(3)->make()
    //dump( App\Models\Comment::factory(3)->create());

    $users = DB::table('users')->get();
    $comments = DB::table('comments')->get();


    dump($users, $comments);

    return view('welcome');
});
