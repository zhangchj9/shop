@extends('layouts.app')
@section('title', '博客功能测试')
@section('content')
<div class="space-custom"></div>

<?php

use Illuminate\Support\Facades\DB;
use App\Models\Article;

// echo "test";
// dd($article->id);

// 检测foreach流程控制的语法问题
// foreach ($article as $k => $v) {
//     echo "Key: $k; Value: $v <br/>\n";
//     // echo "----------------------";
//     // echo $v->tags;
//     echo "----------------------------------------<br/> \n";
// 检测数据库调用的语法
//     $username = DB::table('admin_users')->where('id',$v->admin_id)->value('username');
//     echo $username;
// }

// 检测全局检索search函数是否正常工作, 似乎select函数无法正常运作,感觉 search函数也不太正常，考虑可能是algolia不太行，试试分词操作什么的吧。
    $wd = "二";
    $id = Article::search($wd)->keys();
    echo $id;
    echo $wd;
    // $title = DB::table('articles')->where('id', $id)->value('title');
    // echo $title;

    $article = Article::select('id', 'category_id', 'title', 'admin_id', 'description', 'cover', 'created_at')
        ->whereIn('id', $id);
    //     ->orderBy('created_at', 'desc')
    //     ->with(['category', 'tags'])
    //     ->paginate(10);
    echo is_null($article);

    // foreach($article as $k => $v) {
    //     echo "Key: $k; Value: $v <br/>\n";
    // }

    $head = [
        'title' => $wd,
        'keywords' => '',
        'description' => '',
    ];
    // foreach ($assign as $k => $v) {
    //     echo "Key: $k; Value: $v <br/>\n";
    // }
    $assign = [
        'category_id' => 'index',
        'article' => $article,
        'tagName' => '',
        'title' => $wd,
        // 'head' => $head
    ];


?> 

@endsection