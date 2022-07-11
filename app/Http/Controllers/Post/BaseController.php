<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Services\Post\Service;

class BaseController extends Controller
{
    public $service;

    public function __cunstruct(Service $service)
    {
        $this->service = $service;
    }
}