<?php

namespace App\Http\Response;

class Response
{   
    public function abort(int $code)
    {
        return http_response_code($code);
    }
}