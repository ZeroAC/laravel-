<?php

namespace App\Http\Controllers;

use App\model\post;
use Illuminate\Http\Request;

class postController extends Controller
{
    //
    public function show($id = null)
    {
        $res = post::query()->where('id',$id)->firstOrFail();//拿到id数据  若找不到则返回404
        $res->body = 'hello world!'; //改数据
        $res->save();//保存更改
        return view('post',['res'=>$res]);
    }
}
