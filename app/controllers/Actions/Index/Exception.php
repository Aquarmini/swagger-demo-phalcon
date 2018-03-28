<?php
// +----------------------------------------------------------------------
// | Index.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace App\Controllers\Actions\Index;

use App\Common\Enums\ErrorCode;
use App\Common\Exceptions\BizException;

/**
 * @SWG\Post(
 *     path="/index/exception",
 *     description="Test Exception Action",
 *     operationId="exceptionAction",
 *     produces={"application/json"},
 *     @SWG\Response(
 *         response="default",
 *         description="unexpected error",
 *         @SWG\Schema(
 *             ref="#/definitions/ErrorResponse"
 *         )
 *     )
 * )
 */
trait Exception
{
    public function exceptionAction()
    {
        throw new BizException(ErrorCode::$ENUM_SYSTEM_ERROR);
    }
}