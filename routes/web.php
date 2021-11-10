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
    /* 新增資料
    $post=new Post();//先產生Post的物件$post，$post代表資料表posts的一篇貼文
    $post->title='test title';//指定貼文的title
    $post->content='test content';//指定貼文的content
    $post->save();
    //使用create方法，P.S 應該會遇到 Mass Assignment 的警告
    Post::create([
        'title'=>'test title',
        'content'=>'test content',
    ]);
    */
    /* 查詢資料
    //使用all方法
    $posts = Post::all();//取出posts資料表所有貼文
    dd($posts);//dd=data dump，將變數內容倒出，並停止程式執行
    //使用find方法
    $post = Post::find(11);//找尋posts資料表id=1的貼文
    dd($post);
    //練習條件式
    $posts = Post::where('id','>',10)->orderby('id','DESC')->get();//查詢符合條件的貼文，排序後取出
    dd($posts);
    */
    /* 更新資料
    //使用update方法
    $post = Post::find(11);
    $post->update([
        'title'=>'updated title',
        'content'=>'updated content',
    ]);
    //使用save方法
    $post = Post::find(12);
    $post->title = 'saved title';
    $post->content = 'saved content';
    $post->save();
    */
    //使用delete方法
    /* 刪除資料
    $post = Post::find(11);
    $post->delete();
    //使用destroy方法
    Post::destroy(12);
    //刪除多筆資料
    Post::destroy(13,14,15);
    */
    /*了解 Model 和 Collection 的差異*/
    //取得Collection，多筆貼文的集合
    $allPosts = Post::all();
    dd($allPosts);
    $featuredPosts = Post::where('is_feature',1)->get();
    dd($featuredPosts);
    //取得Model，單一筆貼文
    $fourthPost = Post::find(17);
    dd($fourthPost);
    $lastPost = Post::orderby('id','DESC')->first();
    dd($lastPost);
    //return view('welcome');

});

Route::get('posts',[PostsController::class,'index'])->name('posts.index');

Route::get('post',[PostsController::class,"show"])->name('posts.show');

Route::get('about',[PostsController::class,'about'])->name('posts.about');

Route::get('contact',[PostsController::class,'contact'])->name('posts.contact');



