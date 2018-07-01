@extends('layouts.app')

@section('title', '发布博客')

{{-- @section('nav', '文章列表') --}}
{{-- @section('description', '已发布的文章列表') --}}

@section('content')

<div class="space-custom"></div>


<!-- breadcrumb start -->
<div class="breadcrumb-area">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="index"><i class="fa fa-home"></i></a></li>
			<li class="active">博客</li>
		</ol>			
	</div>
</div>
<!-- breadcrumb end -->


<table class="table table-striped table-bordered table-hover">
	<tr>
		<th>博客id</th>
		<th>分类</th>
		<th>标题</th>
		<th>点击数</th>
		<th>状态</th>
		<th>发布时间</th>
		<th>操作</th>
	</tr>
	@foreach($article as $k => $v)
		<tr>
			<td>{{ $v->id }}</td>
			<td>{{ $v->category->name }}</td>
			<td>
				<a href="{{ route('blog', [$v->id]) }}" target="_blank">{{ $v->title }}</a>
			</td>
			<td>{{ $v->click }}</td>
			<td>
				@if(is_null($v->deleted_at))
					√
				@else
					×
				@endif
			</td>
			<td>{{ $v->created_at }}</td>
			<td>
				<a href="{{ url('admin/article/edit', [$v->id]) }}">编辑</a>
				|
				@if($v->trashed())
					<a href="javascript:if(confirm('确认恢复?'))location.href='{{ url('admin/article/restore', [$v->id]) }}'">恢复</a>
					|
					<a href="javascript:if(confirm('彻底删除?'))location.href='{{ url('admin/article/forceDelete', [$v->id]) }}'">彻底删除</a>
				@else
					<a href="javascript:if(confirm('确认删除?'))location.href='{{ url('admin/article/destroy', [$v->id]) }}'">删除</a>
				@endif
			</td>
		</tr>
	@endforeach
</table>
	
    {{-- <div class="text-center">
        {{ $article->links('vendor.pagination.bjypage') }}
    </div> --}}

@endsection
