<?php
/**
 * @SWG\Swagger(
 *     host="swagger.demo.phalcon.xin",
 *     schemes={"http"},
 *     produces={"application/json"},
 *     consumes={"application/json"},
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="Swagger DEMO",
 *         description="Swagger DEMO",
 *         @SWG\Contact(name="limx"),
 *     ),
 *     @SWG\Definition(
 *         definition="ErrorResponse",
 *         type="object",
 *         required={"success", "errorCode", "errorMessage"},
 *         @SWG\Property(
 *             property="success",
 *             type="boolean"
 *         ),
 *         @SWG\Property(
 *             property="errorCode",
 *             type="integer",
 *             format="int32"
 *         ),
 *         @SWG\Property(
 *             property="errorMessage",
 *             type="string",
 *         )
 *     )
 * )
 */