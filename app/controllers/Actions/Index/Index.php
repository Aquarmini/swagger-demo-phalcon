<?php
// +----------------------------------------------------------------------
// | Index.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace App\Controllers\Actions\Index;

use App\Core\System;
use App\Utils\Response;

/**
 * @SWG\Post(
 *     path="/index/index",
 *     description="Welcome",
 *     operationId="indexAction",
 *     produces={"application/json"},
 *     @SWG\Response(
 *         response=200,
 *         description="Show welcome message",
 *         @SWG\Schema(
 *             @SWG\Property(
 *                 property="success",
 *                 type="boolean",
 *             ),
 *             @SWG\Property(
 *                 property="data",
 *                 type="object",
 *                 @SWG\Property(
 *                     property="version",
 *                     type="string"
 *                 ),
 *                 @SWG\Property(
 *                     property="message",
 *                     type="string"
 *                 ),
 *             ),
 *         ),
 *     ),
 *     @SWG\Response(
 *         response="default",
 *         description="unexpected error",
 *         @SWG\Schema(
 *             ref="#/definitions/ErrorResponse"
 *         )
 *     )
 * )
 */
trait Index
{
    /**
     * @desc
     * @author limx
     * @return bool|\Phalcon\Mvc\View
     * @Middleware('auth')
     */
    public function indexAction()
    {
        if ($this->request->isPost()) {
            $message = di('configCenter')->get('msg')->welcome;
            return Response::success([
                'version' => System::getInstance()->version(),
                'message' => $message,
            ]);
        }
        $this->view->version = System::getInstance()->version();
        return $this->view->render('index', 'index');
    }
}