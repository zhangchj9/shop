@extends('layouts.app')
@section('title', '博客功能测试')
@section('content')
<div class="space-custom"></div>

<?php
use Illuminate\Support\Facades\DB;
use App\Models\Article;
dump($wd);
dump(strip_tags($wd));
dump($category_id);
dump($id);
dump($article);
?>




@endsection