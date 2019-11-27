<?php
namespace app\index\model;

use think\Model;
use think\facade\Config;

class User extends Model
{
    protected $table = 'think_user';
    
    // 设置当前模型的数据库连接
    protected $connection = 'db_1';
    protected $pk = 'id';
}