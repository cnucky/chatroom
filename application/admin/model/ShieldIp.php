<?php

namespace app\admin\model;

use think\Model;

class ShieldIp extends Model
{
    // 表名
    protected $name = 'shield_ip';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = false;
    
    // 追加属性
    protected $append = [

    ];
    

    







}
