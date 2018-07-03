@extends('layouts.blayout')

@section('content')

<div class="space-custom"></div> 
<!-- 引入通用评论开始 -->

<li class="b-submit-button">
    <?php echo request()->id; ?>;
    <input class="js-comment-btn" type="button" value="评 论" aid="{{ request()->id }}" pid="0">
</li>


</div>

@endsection
