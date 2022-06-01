<?php

namespace Portfolio\Controllers;

class ErrorController
{
    public function notFound()
    {
        http_response_code(404);
        return view('/app/Views/error/404.tpl.php')
    }
}