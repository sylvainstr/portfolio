<?php

namespace Portfolio\Controllers;

class ErrorController extends CoreController
{
    public function notFound()
    {
        http_response_code(404);
        $this->show('404');
    }
}