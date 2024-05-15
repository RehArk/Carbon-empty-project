<?php

namespace App;

use Rehark\Carbon\DefaultKernel;

class Kernel extends DefaultKernel {
    
    public function __construct()
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        parent::__construct(ROOT);
    }

}