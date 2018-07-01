@extends('layouts.blayout')

@section('title', $data->title)
@section('keywords', $data->keywords)
@section('description', $data->description)

@section('content')


<div class="space-custom"></div> 

<!-- breadcrumb start -->
<div class="breadcrumb-area">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ route('root') }}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{ route('blogs.index') }}">Blog</a></li>
            <li class="active">Detail</li>
        </ol>			
    </div>
</div>
<!-- breadcrumb end -->


<div class="blog-area">
    <div class="container">
        <div class="row">

            <!-- 左侧检索栏-->
            <div class="col-md-3 col-sm-3 mb-40">
                <div class="column">
                    <h2 class="title-block">Catalog</h2>
                    
                    <div class="sidebar-widget">
                        <h3 class="sidebar-title">Search</h3>
                        <form class="form-inline"  role="form" action="{{ route('search') }}" method="get">
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
                                <a class="b-recommend-a" href="{{ url('article', [$v->id]) }}" target="_blank"><span class="fa fa-th-list b-black"> {{ $v->title }}</span></a>
                            @endforeach
                        </p>
                    </div>

                    <div class="sidebar-widget">
                        <h3 class="sidebar-title">Latest Comments</h3>
                        <div>
                            @foreach($newComment as $v)
                                <ul class="b-new-comment @if($loop->first) b-new-commit-first @endif">
                                    @guest
                                    @else
                                        <img class="b-head-img js-head-img" src= <?php Auth::user()->avatar ?> alt="{{ $v->name }}">
                                    @endguest
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
            <!-- 左侧检索栏结束-->



        <div class="col-md-9 col-sm-9">

            <div class="row b-article">
                {{-- 博客标题 --}}
                <h2 class="col-xs-12 col-md-12 col-lg-12 b-title">{{ $data->title }}</h2>

                <div class="col-xs-12 col-md-12 col-lg-12">
                    {{-- 博客元数据部分 --}}
                    <?php 
                        $username = DB::table('admin_users')->where('id', $data->admin_id)->value('username');
                    ?>
                    <ul class="row b-metadata">
                        <li class="col-xs-5 col-md-2 col-lg-3"><i class="fa fa-user"></i> {!! $username !!}</li>
                        <li class="col-xs-7 col-md-3 col-lg-3"><i class="fa fa-calendar"></i> {{ $data->created_at }}</li>
                        <li class="col-xs-5 col-md-2 col-lg-2"><i class="fa fa-list-alt"></i> <a href="{{ url('category', [$data->category->id]) }}">{{ $data->category->name }}</a>
                        <li class="col-xs-7 col-md-5 col-lg-4 "><i class="fa fa-tags"></i>
                            @foreach($data->tags as $v)
                                <a class="b-tag-name" href="{{ url('tag', [$v->id]) }}">{{ $v->name }}</a>
                            @endforeach
                        </li>
                    </ul>
                </div>

                <!-- 正文、文末上/下篇及Copyright显示模块开始  -->
                <div class="col-xs-12 col-md-12 col-lg-12 b-content-word">
                    <div class="js-content">{!! $data->html !!}</div>
                    
                    <p class="b-h-20"></p>
                    <p class="b-copyright">
                            {!! htmlspecialchars_decode($config['COPYRIGHT_WORD']) !!}
                        </p>
                    <div class="col-xs-5 col-md-2 col-lg-3" style="float:right">    
                        <wb:like appkey="2KixIs" type="number"></wb:like>
                        <wb:share-button appkey="1704419512" addition="number" type="button" ralateUid="2237099774"></wb:share-button>
                    </div>

                    <ul class="b-prev-next" style="float:right">
                        <li class="b-prev">
                            上一篇：
                            @if(is_null($prev))
                                <span>没有了</span>
                            @else
                                <a href="{{ url('blog', [$prev->id]) }}">{{ $prev->title }}</a>
                            @endif
                        </li>
                        <li class="b-next">
                            下一篇：
                            @if(is_null($next))
                                <span>没有了</span>
                            @else
                                <a href="{{ url('blog', [$next->id]) }}">{{ $next->title }}</a>
                            @endif
                        </li>
                    </ul>
                </div>
                <!-- 正文文末上/下篇及Copyright显示模块结束 -->

            </div>

            <!-- 引入通用评论开始 -->
            <script>
                var userEmail='{{ session('user.email') }}';
                tuzkiNumber=1;
            </script>
            {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
            {{-- <script src="{{URL::asset('js/blogs/index.js')}}"></script>
            <script src="{{URL::asset('js/blogs/comment.js')}}"></script> --}}



            <div class="row b-comment">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 b-comment-box">
                    @guest
                        <img class="b-head-img" src={{ asset('images/home/default_head_img.gif') }} alt="{{ $config['WEB_NAME'] }}" title="{{ $config['WEB_NAME'] }}">
                    @else
                        <img class="b-head-img" src=<?php Auth::user()->avatar ?> alt="{{ $config['WEB_NAME'] }}" title="{{ $config['WEB_NAME'] }}">
                    @endguest
                    <div class="b-box-textarea">
                        @guest
                            <div class="b-box-content js-hint" contenteditable="false">请先登录后发表评论</div>
                        @else
                            <div class="b-box-content js-hint" contenteditable="true"></div>
                        @endguest
                        <ul class="b-emote-submit">
                            <li class="b-emote">
                                <i class="fa fa-smile-o js-get-tuzki"></i>
                                <input class="form-control b-email" type="text" name="email" placeholder="接收回复的email地址" value="{{ session('user.email') }}">
                                <div class="b-tuzki">

                                </div>
                            </li>
                            <li class="b-submit-button">
                                <input class="js-comment-btn" type="button" value="评 论" aid="{{ request()->id }}" pid="0">
                            </li>
                            <li class="b-clear-float"></li>
                        </ul>
                    </div>
                    <div class="b-clear-float"></div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 b-comment-title">
                    <ul class="row">
                        <li class="col-xs-6 col-sm-6 col-md-6 col-lg-6">最新评论</li>
                        <li class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">总共<span>{{ count($comment) }}</span>条评论</li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 b-user-comment">
                @foreach($comment as $k => $v)
                    <div id="comment-{{ $v['id'] }}" class="row b-user b-parent">
                        <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 b-pic-col">
                            <img class="b-user-pic js-head-img" src="{{ asset('uploads/avatar/default.jpg') }}" _src="{{ asset($v['avatar']) }}" alt="{{ $config['WEB_NAME'] }}" title="{{ $config['WEB_NAME'] }}">
                        </div>
                        <div class="col-xs-10 col-sm-11 col-md-11 col-lg-11 b-content-col b-cc-first">
                            <p class="b-content">
                                <span class="b-user-name">{{ $v['name'] }}</span>：{!! $v['content'] !!}
                            </p>
                            <p class="b-date">
                                {{ $v['created_at'] }} <a class="js-reply" href="javascript:;" aid="{{ request()->id }}" pid="{{ $v['id'] }}" username="{{ $v['name'] }}">回复</a>
                            </p>
                            <foreach name="v['child']" item="n">
                            @foreach($v['child'] as $m => $n)
                                <div id="comment-{{ $n['id'] }}" class="row b-user b-child">
                                    <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 b-pic-col">
                                        <img class="b-user-pic js-head-img" src="{{ asset('uploads/avatar/default.jpg') }}" _src="{{ asset($n['avatar']) }}" alt="{{ $config['WEB_NAME'] }}" title="{{ $config['WEB_NAME'] }}">
                                    </div>
                                    <ul class="col-xs-10 col-sm-11 col-md-11 col-lg-11 b-content-col">
                                        <li class="b-content">
                                            <span class="b-reply-name">{{ $n['name'] }}</span>
                                            <span class="b-reply">回复</span>
                                            <span class="b-user-name">{{ $n['reply_name'] }}</span>：{!! $n['content'] !!}
                                        </li>
                                        <li class="b-date">
                                            {{ $n['created_at'] }} <a class="js-reply" href="javascript:;" aid="{{ request()->id }}" pid="{{ $n['id'] }}" username="{{ $n['reply_name'] }}">回复</a>
                                        </li>
                                        <li class="b-clear-float"></li>
                                    </ul>
                                </div>
                            @endforeach
                            <div class="b-clear-float"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="b-border"></div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
            <!-- 引入通用评论结束 -->
        </div>
        <!-- 左侧文章结束 -->
    </div>
</div>
@endsection

@section('js')
    <script>
        // 添加行数
        $('pre').addClass('line-numbers');
        // 新页面跳转
        $('.js-content a').attr('target', '_blank');

        // 定义评论url
        ajaxCommentUrl = "{{ url('comment') }}";
        checkLogin = "{{ url('checkLogin') }}";
        titleName = '{{ $config['WEB_NAME'] }}';
    </script>
    <script src="{{ asset('statics/layer-2.4/layer.js') }}"></script>
@endsection