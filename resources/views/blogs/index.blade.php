{{-- /var/www/html/shop/resources/views/blogs/ --}}
@extends('layouts.app')
@section('title', '博客列表')
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


<!-- shop-area start -->
{{-- <form action="{{ route('blogs.index') }}" class="form-inline search-form"> --}}
  <div class="blog-area">
    <div class="container">
        <div class="row">

            <!-- 左侧检索栏-->
            <div class="col-md-3 col-sm-3 mb-40">
                <div class="column">
                    <h2 class="title-block">Catalog</h2>
                    
                    <div class="sidebar-widget">
                        <h3 class="sidebar-title">Search</h3>
                        <form class="form-inline"  role="form" action="{{ url('search') }}" method="get">
                            <input class="b-search-text" type="text" name="wd" placeholder="Full Text Search" autocomplete="off" />
                            {{-- <button><i class="fa fa-search"></i></button> --}}
                            {{-- <input class="b-search-submit" type="submit" value="全站搜索"> --}}
                        </form>
                    </div>						

                    <div class="sidebar-widget">
                        <h3 class="sidebar-title">Hot Tags</h3>
                        <ul class="sidebar-menu">
                            <?php $tag_i = 0; ?>
                            @foreach($tag as $v)
                                <?php $tag_i++; ?>
                                <?php $tag_i=$tag_i==5?1:$tag_i; ?>
                                <li class="b-tname">
                                    <a class="tstyle-{{ $tag_i }}" href="{{ url('tag', [$v->id]) }}">{{ $v->name }} ({{ $v->articles_count }})</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="sidebar-widget">
                        <h3 class="sidebar-title">Recommended</h3>
                        <p class="b-recommend-p">
                            @foreach($topArticle as $v)
                                <a class="b-recommend-a" href="{{ url('blog', [$v->id]) }}" target="_blank"><span class="fa fa-th-list b-black"></span> {{ $v->title }}</a>
                            @endforeach
                        </p>
                    </div>

                    <div class="sidebar-widget">
                        <h3 class="sidebar-title">Latest Comments</h3>
                        <div>
                            @foreach($newComment as $v)
                                <ul class="b-new-comment @if($loop->first) b-new-commit-first @endif">
                                    {{-- <img class="b-head-img js-head-img" src="{{ asset('uploads/avatar/default.jpg') }}" _src="{{ asset($v->avatar) }}" alt="{{ $v->name }}"> --}}
                                    <li class="b-nickname">
                                        {{ $v->name }} -- <span>{{ word_time($v->created_at) }}</span>
                                    </li>
                                    <li class="b-nc-article">
                                        在<a href="{{ url('blog', [$v->article_id]) }}" target="_blank">{{ $v->title }}</a>中评论：
                                    </li>
                                    <li class="b-content">
                                        {!! $v->content !!}
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    </div>                    

                </div>
            </div>

            <!-- 右侧博客摘要列表-->
            <div class="col-md-9 col-sm-9">
                @if(!empty($tagName))
                    <div class="row b-tag-title">
                        <div class="col-xs-12 col-md-12 col-lg-12">
                            <h2>拥有<span class="b-highlight">{{ $tagName }}</span>标签的文章</h2>
                        </div>
                    </div>
                @endif
                @if(request()->has('wd'))
                    <div class="row b-tag-title">
                        <div class="col-xs-12 col-md-12 col-lg-12">
                            <h2>搜索到的与<span class="b-highlight">{{ request()->input('wd') }}</span>相关的文章</h2>
                        </div>
                    </div>
                @endif
        
                <!-- 循环文章列表开始, 这个k和v分别对应key和value-->
				@foreach($article as $k => $v)
                    <div class="row b-one-article">
                        <h3 class="col-xs-12 col-md-12 col-lg-12">
                            <a class="b-oa-title" href="{{ url('blog', [$v->id]) }}" target="_blank">{{ $v->title }}</a>
                        </h3>
        
                        <div class="col-xs-12 col-md-12 col-lg-12 b-date">
                            <ul class="row">
                                <li class="col-xs-5 col-md-2 col-lg-3">
                                    <?php 
                                        $username = DB::table('admin_users')->where('id',$v->admin_id)->value('username');
                                    ?>
                                    <i class="fa fa-user"></i> {!! $username !!} <!-- 禁止laravel自动转义变量到HTML标签 -->
                                </li>
                                <li class="col-xs-7 col-md-3 col-lg-3">
                                    <i class="fa fa-calendar"></i> {{ $v->created_at }}
								</li>
								{{-- @if(is_null($v->category))  // 这里下面两个li可以搞个逻辑判断一下有没有category和tag，否则的话分别是Null和[]，会出现空指针异常 --}}

								<li class="col-xs-5 col-md-2 col-lg-2">
									<i class="fa fa-list-alt"></i> <a href="{{ url('category', [$v->category->id]) }}" target="_blank">{{ $v->category->name }}</a>
								</li>
							
                                <li class="col-xs-7 col-md-5 col-lg-4 "><i class="fa fa-tags"></i>
                                    @foreach($v->tags as $n)
										<a class="b-tag-name" href="{{ url('tag', [$n->id]) }}" target="_blank">{{ $n->name }}</a>
                                    @endforeach
                                </li>
                            </ul>
                        </div>
        
                        <div class="col-xs-12 col-md-12 col-lg-12">
                            <div class="row">
                                <!-- 文章封面图片开始 -->
                                <div class="col-sm-6 col-md-6 col-lg-4 hidden-xs">
                                    <figure class="b-oa-pic b-style1">
                                        <a href="{{ url('blog', $v->id) }}" target="_blank">
                                            <img src="{{ asset($v->cover) }}" alt="{{ $config['IMAGE_TITLE_ALT_WORD'] }}" title="{{ $config['IMAGE_TITLE_ALT_WORD'] }}">
                                        </a>
                                        <figcaption>
                                            <a href="{{ url('blog', [$v->id]) }}" target="_blank"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <!-- 文章封面图片结束 -->
        
                                <!-- 文章描述开始 -->
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-8 b-des-read">
                                    {{ $v->description }}
                                </div>
                                <!-- 文章描述结束 -->
                            </div>
                        </div>
        
                        <a class=" b-readall" href="{{ url('blog', [$v->id]) }}" target="_blank">Read More</a>
                    </div>
                @endforeach
                <!-- 循环文章列表结束 -->
        
        
                <!-- 列表分页开始 -->
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-lg-12 b-page text-center">
                        {{ $article->appends(['wd' => request()->input('wd')])->links('vendor.pagination.bjypage') }}
                    </div>
                </div>
                <!-- 列表分页结束 -->
            </div>
        </div>
    </div>
    </div>
{{-- </form> --}}


<!-- service-area start -->
<div class="service-area pt-70 pb-40 gray-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="single-service mb-30">
          <div class="service-icon">
            <i class="pe-7s-world"></i>
          </div>
          <div class="service-title">
            <h3>FREE SHIPPING</h3>
            <p>Free shipping on all UK orders</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="single-service mb-30">
          <div class="service-icon">
            <i class="pe-7s-refresh"></i>
          </div>
          <div class="service-title">
            <h3>FREE EXCHANGE</h3>
            <p>30 days return on all items</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="single-service mb-30 sm-mrg">
          <div class="service-icon">
            <i class="pe-7s-headphones"></i>
          </div>
          <div class="service-title">
            <h3>PREMIUM SUPPORT</h3>
            <p>We support online 24 hours a day</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="single-service mb-30 xs-mrg sm-mrg">
          <div class="service-icon">
            <i class="pe-7s-gift"></i>
          </div>
          <div class="service-title">
            <h3>BLACK FRIDAY</h3>
            <p>Shocking discount on every friday</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

