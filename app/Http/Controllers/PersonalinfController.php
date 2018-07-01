<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use DB;

class PersonalinfController extends Controller
{
    //
    public function index(){
        return view('personalinf');
    }
    public function uploads(Request $request)
    {
        //DB::update('update users set name=? where id =?',[$request->newname,$request->user()->id]);

        $file = $request->file('newavatar');
        if ($file->isValid()) {
            $ext = $file->getClientOriginalExtension();
            //获取文件的绝对路径
            $path = $file->getRealPath();
            //定义文件名
            $filename = date('Y-m-d-h-i-s').'.'.$ext;
            //存储文件。disk里面的public。总的来说，就是调用disk模块里的public配置
            // Storage::disk('public')->put($filename, file_get_contents($path));
            $file->move('./images',$filename);
        }
        return view('index');

        // $folder = 'Uploads/'.date('Ymd');
        // $newFileName = md5(microtime()) . '.' . $file->getClientOriginalExtension();        
        // Storage::disk('public')->put($folder . '/' . $newFileName, file_get_contents($file));
        // return back();
        // $path=Storage::putFile('images', $request->file('newavatar'));
        // $path = $request->file('newavatar')->storage('images/'.$request->newavatar,'public');
        // Storage::disk('public')->put('images/', file_get_contents($filename));
        // dd($path);
    }
}
