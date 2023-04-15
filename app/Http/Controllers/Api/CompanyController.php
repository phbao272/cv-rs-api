<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Models\Company;
use App\Models\Master\MExperience;

class CompanyController extends BaseController
{
    public function setModel()
    {
        // TODO: Implement setModel() method.
        $this->model = new Company();
    }

    public function hotCompany()
    {
        $companies = $this->query->withCount('jobs')->orderBy('jobs_count', 'desc')->limit(4)->get();


        return response()->json($companies);
    }
}
