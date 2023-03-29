<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Models\Master\MExperience;

class ExperienceController extends BaseController
{
    //
    public function setModel()
    {
        // TODO: Implement setModel() method.
        $this->model = new MExperience();
    }
}
