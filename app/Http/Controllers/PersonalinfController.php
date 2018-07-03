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
        $notice='保存成功';
        if(!is_null($request->newname))
        {
                DB::update('update users set name=? where id =?',[$request->newname,$request->user()->id]);
        }
        
        // dd($request->file('newavatar'));
        if ($request->hasFile('newavatar'))
        {     
                $file = $request->file('newavatar');
                $ext = $file->getClientOriginalExtension();
                
                if(in_array($ext,['jpeg','jpg','png','gpeg']))
                {
                        $size=$file->getSize();
                        if($size>2*1024*1024)
                        {
                                $notice='图片不能大于2M';
                        }
                        else{
                                $filename = 'images/'.date('Y-m-d-h-i-s').'.'.$ext;
                //         //存储文件。disk里面的public。总的来说，就是调用disk模块里的public配置
                //         // Storage::disk('public')->put($filename, file_get_contents($path));
                                $file->move('./images',$filename);
                        // Storage::disk('public')->put('$filename', 'Contents');
                                DB::update('update users set avatar=? where id =?',[$filename,$request->user()->id]);
                        }
                       
                }
                else{
                        $notice='图片格式不正确';
                }
        }
                
        
        return view('pages.notice_for_personalinf',['msg' => $notice]);
        // else{echo "das";}
        
    // }
        // return redirect('personalinf')->with("success",'操作成功');
        
        

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
