<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Models\Company;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends BaseController
{
    /**
     * @var JobSkillController
     */
    private $jobSkillController;

    public function __construct(
        JobSkillController $jobSkillController
    )
    {
        $this->jobSkillController = $jobSkillController;

        parent::__construct();
    }
    public function setModel()
    {
        // TODO: Implement setModel() method.
        $this->model = new Job();
    }

    public function appendFilter()
    {
        $this->query->with(['company', 'location', 'salary']);
    }

    public function afterFind($item)
    {
        $item->company;
        $item->location;
        $item->salary;
        $item->experience;
        $item->working_form;
        $item->education_level;
        $item->skills;

        return $item;
    }

    public function getMyJob()
    {
        $userId = Auth::id();

        $company = Company::query()->where("user_id", $userId)->first();

        $job = $this->query->where(["company_id" => $company->id])
            ->with(["experience", "working_form", "education_level"])->get();

        return response()->json($job);
    }

    public function update(Request $request, $id)
    {
        $job = $this->query->where("id", $id)->first();
        $newIds = $request->skills;

        $this->jobSkillController->updateArray($job, $newIds);

        return parent::update($request, $id); // TODO: Change the autogenerated stub
    }
}