@extends('layouts.app2')
@section('title', '调查问卷')


@section('content')
<form class="form-horizontal" role="form" action=" {{route('questionnaire.store')}}"method="post">
{{ csrf_field() }}
<p>
    <font size="4">1.您有偏好的手机品牌吗？</font>
    <br><br>
    <input type="radio" name="brand" value="0" checked>无
    <br><br>
    <input type="radio" name="brand" value="apple">苹果
    <br><br>
    <input type="radio" name="brand" value="huawei">华为
    <br><br>
    <input type="radio" name="brand" value="xiaomi">小米
    <br><br>
    <input type="radio" name="brand" value="other">其他
    <br><br>
</p>
<p>
<font size="4">2.您对屏幕尺寸的偏好是？</font>
    <br><br>
    <input type="radio" name="screensize" value="0" checked>无
    <br><br>
    <input type="radio" name="screensize" value="1">小屏
    <br><br>
    <input type="radio" name="screensize" value="2">中屏
    <br><br>
    <input type="radio" name="screensize" value="3">大屏
    <br><br>
</p>
<p>
    <font size="4">3.您对手机拍照功能的需求程度是？</font>
    <br><br>
    <input type="radio" name="photo" value="0" checked>无
    <br><br>
    <input type="radio" name="photo" value="1">有一定需求
    <br><br>
    <input type="radio" name="photo" value="2">非常重要
    <br><br>
</p>
<p>
    <font size="4">4.您对手机大存储容量的需求程度是？</font>
    <br><br>
    <input type="radio" name="memorysize" value="0" checked>无
    <br><br>
    <input type="radio" name="memorysize" value="1">有一定需求
    <br><br>
    <input type="radio" name="memorysize" value="2">非常需要
    <br><br>
</p>
<p>
<font size="4">5.您对手机大运行内存的需求是？</font>
    <br><br>
    <input type="radio" name="ram" value="0" checked>无
    <br><br>
    <input type="radio" name="ram" value="1">有一定需求
    <br><br>
    <input type="radio" name="ram" value="2">非常需要
    <br><br>
<div class="form-group text-center">
    <button type="submit" class="btn btn-primary">提交</button>
</div>
</form>
@endsection