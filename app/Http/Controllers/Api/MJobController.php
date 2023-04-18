<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Models\Master\MJob;
use App\Models\Master\MSkill;
use Illuminate\Http\Request;

class MJobController extends BaseController
{
    //
    public function setModel()
    {
        // TODO: Implement setModel() method.
        $this->model = new MJob();
    }
}
