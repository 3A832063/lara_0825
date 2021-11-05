<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // 設定 model 對應到的資料表
    // protected $table = 'posts';
    //設定 Post.php的 fillable屬性
    protected $fillable = [
        'title',
        'content',
        'is_feature'
    ];
}
