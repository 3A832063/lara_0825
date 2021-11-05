<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Models\Post;
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

Route::get('posts',[PostsController::class,'index'])->name('posts.index');

Route::get('post',[PostsController::class,"show"])->name('posts.show');

Route::get('about',[PostsController::class,'about'])->name('posts.about');

Route::get('contact',[PostsController::class,'contact'])->name('posts.contact');

$post=new Post();//先產生Post的物件$post，$post代表資料表posts的一篇貼文
$post->title='test title';//指定貼文的title
$post->content='test content';//指定貼文的content
$post->save();
//使用create方法，P.S 應該會遇到 Mass Assignment 的警告
Post::create([
    'title'=>'test title',
    'content'=>'test content',
]);
