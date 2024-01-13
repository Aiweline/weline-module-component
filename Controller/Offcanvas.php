<?php

namespace Weline\Component\Controller;

use Weline\Framework\App\Controller\FrontendController;

class Offcanvas extends FrontendController
{
    function index()
    {
        return $this->fetch();
    }
}