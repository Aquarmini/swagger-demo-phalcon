<?php

namespace App\Tasks\System;

use App\Tasks\Task;
use function Swagger\scan;

class SwaggerTask extends Task
{
    public function mainAction()
    {
        $swagger = scan(APP_PATH);
        header('Content-Type: application/json');
        echo $swagger;
    }
}
