<!doctype html>
<html  lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
</head>
<body>
    <form action="{{ route('personalinf.uploads') }}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
        <label for="userlabel"><font size="4">用户名</font></label>
        <input type="text" value="{{Auth::user()->name}}" name="newname" id="userlabel" style="height:40px;width:250px">
        <label for="tx"><font size="4">头像</font></label>
        <input type="file" name="newavatar" id="tx" >
        <button type="submit" class="btn btn-primary">
            保存
        </button>
    </form>
</body>

</html>