@extends('layouts.app')
@section('title', '调查问卷')


@section('content')
<div class="space-custom"></div>
<div class="breadcrumb-area">
		<div class="container">
			<ol class="breadcrumb">
                <li><a href="{{route('root')}}"><i class="fa fa-home"></i></a></li>
                <!-- <li><a href="#">Shop</a></li> -->
                <li class="active">questionnaire</li>
			</ol>			
		</div>
</div>  
<div  class="user-login pb-60">
		<div class="container">
			<div class="row">
				<div class="clear"></div>
				<div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-3">
<form class="form-horizontal" role="form" action=" {{route('questionnaire.store')}}"method="post">
{{ csrf_field() }}
<p class="form-row pd-right">
    <font size="4">1.您有偏好的手机品牌吗？</font>
    <br><br>
    
    <input type="radio" name="brand" value="0" id="brand1" style="width:15px;height:15px" checked>
    <label for="brand1">无</label>    
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="brand" value="Apple"id="brand2"style="width:15px;height:15px">
    <label for="brand2">苹果</label>    
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="brand" value="HUAWEI"id="brand3"style="width:15px;height:15px">
    <label for="brand3">华为</label>    
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="brand" value="MI"id="brand4"style="width:15px;height:15px">
    <label for="brand4">小米</label>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="brand" value="SAMSUNG"id="brand5"style="width:15px;height:15px">
    <label for="brand5">三星</label>
&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="brand" value="VIVO"id="brand6"style="width:15px;height:15px">
    <label for="brand6">VIVO</label>
&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="brand" value="OPPO"id="brand7"style="width:15px;height:15px">
    <label for="brand7">OPPO</label>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="brand" value="b_other"id="brand8"style="width:15px;height:15px">
    <label for="brand8">其他</label>
    <br><br>
</p>
<p>
<font size="4">2.您对屏幕尺寸的偏好是？</font>
    <br><br>
    
    <input type="radio" name="screensize" value="0" id="screensize1"style="width:15px;height:15px"checked>
    <label for="screensize1">无</label>
    <br><br>
    
    <input type="radio" name="screensize" value="1"id="screensize2"style="width:15px;height:15px">
    <label for="screensize2">小屏</label>
    <br><br>
    
    <input type="radio" name="screensize" value="2"id="screensize3"style="width:15px;height:15px">
    <label for="screensize3">中屏</label>
    <br><br>
    
    <input type="radio" name="screensize" value="3"id="screensize4"style="width:15px;height:15px">
    <label for="screensize4">大屏</label>
    <br><br>
</p>
<p>
    <font size="4">3.您对手机拍照功能的需求程度是？</font>
    <br><br>
    
    <input type="radio" name="photo" value="0" id="photo1"style="width:15px;height:15px"checked>
    <label for="photo1">无</label>
    <br><br>
    
    <input type="radio" name="photo" value="1" id="photo2"style="width:15px;height:15px">
    <label for="photo2">有一定需要</label>
    <br><br>
    
    <input type="radio" name="photo" value="2" id="photo3"style="width:15px;height:15px">
    <label for="photo3">非常重要</label>
    <br><br>
</p>
<p>
    <font size="4">4.您对手机大存储容量的需求程度是？</font>
    <br><br>
    
    <input type="radio" name="memorysize" value="0" id="photo1"style="width:15px;height:15px"checked>
    <label for="photo1">无</label>
    <br><br>
    
    <input type="radio" name="memorysize" value="1"id="photo2"style="width:15px;height:15px">
    <label for="photo1">有一定需要</label>
    <br><br>
    <input type="radio" name="memorysize" value="2"id="photo3"style="width:15px;height:15px">
    <label for="photo1">非常需要</label>
    <br><br>
</p>
<p>
<font size="4">5.您对手机大运行内存的需求是？</font>
    <br><br>
    <input type="radio" name="ram" value="0" id="ram1"style="width:15px;height:15px"checked>
    <label for="ram1">无</label>
    <br><br>
    <input type="radio" name="ram" value="1" id="ram2"style="width:15px;height:15px">
    <label for="ram2">有一定需要</label>
    <br><br>
    <input type="radio" name="ram" value="2" id="ram3"style="width:15px;height:15px">
    <label for="ram3">非常需要</label>
    <br><br>
<div class="form-group text-center">
    <button type="submit" class="btn btn-primary">提交</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection