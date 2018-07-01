<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function root()
    {
        return view('pages.root');
    }

    public function emailVerifyNotice(Request $request)
    {
        return view('pages.email_verify_notice');
    }
    public function isvipnotice(Request $request)
    {
        return view('pages.isvip_notice');
    }
    public function vipindex()
    {
        return view('viparea');
    }
    public function vipregisterindex(){
        return view('vipregister');
    }
}
