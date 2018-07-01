<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QuestionnaireController extends Controller
{
    //
    public function index()
    {
        return view('questionnaire');
    }
    public function store(Request $request)

    {
        // // dd($request['brand']);
        // $request->user()->id
        // dd($request->user()->id);
        // dd(Auth::user()->id);
         $user_id=$request->user()->id;
        // $brand=$request['brand'];
        // $screensize=$request['screensize'];
        // $photo=$request['photo'];
        // $memorysize=$request['memorysize'];
        // $ram=$request['ram'];
        // $get=DB::table('personalizations')->where('user_id', $user_id)->first();
        // dd($get);
        if(!is_null(DB::table('personalizations')->where('user_id', $user_id)->first())) //不能用if(!$get->isEmpty())判断，这里好像没有用Laravel Eloquent模型
        {
            DB::delete('delete from personalizations where user_id=?',[$user_id]);
        }
        DB::insert('insert into personalizations (user_id,brand,screensize,photo,memorysize,ram) values(?,?,?,?,?,?)',[$user_id,$request->brand,$request->screensize,$request->photo,$request->memorysize,$request->ram]);
        return redirect()->route('root');
    }
}
