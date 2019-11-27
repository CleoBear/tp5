<?php
namespace app\api\controller;

use think\View;

class Member
{
    public function list($year, $month=1){
        return $year.'/'.$month;
        //$view = new View();
        //return $view->fetch('index');
    }

    public function getMemberName(){
        return 'mamber  name';
    }
}
