<?php
namespace app\api\controller;

class OnlineMember
{
    public function list()
    {
        $data = ['name'=>'thinkphp','url'=>'thinkphp.cn'];
        // 指定xml数据输出
        return json(['data'=>$data,'code'=>1,'message'=>'操作完成']);
    }
}
