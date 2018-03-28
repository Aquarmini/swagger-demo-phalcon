<?php
// +----------------------------------------------------------------------
// | 默认控制器 [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.lmx0536.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <http://www.lmx0536.cn>
// +----------------------------------------------------------------------
namespace App\Controllers;

use App\Controllers\Actions\Index\Exception;
use App\Controllers\Actions\Index\Index;

class IndexController extends Controller
{
    /** 首页 */
    use Index;
    /** 异常接口 */
    use Exception;
}
