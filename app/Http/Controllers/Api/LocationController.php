<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Models\Master\MLocation;


class LocationController extends BaseController
{
    public function setModel()
    {
        // TODO: Implement setModel() method.
        $this->model = new MLocation();
    }
}
