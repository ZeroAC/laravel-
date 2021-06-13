<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public $timestamps=false;
    public function publish()//封装关于数据库的操作
    {
        $this->published = true;//修改发布状态的字段为true
        $this->save();
    }
}
