<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Models\JobSkill;
use Illuminate\Support\Arr;

class JobSkillController extends BaseController
{

    public function setModel()
    {
        // TODO: Implement setModel() method.
        $this->model = new JobSkill();
    }

    public function storeArray($job, $ids)
    {
        collect($ids)
            ->each(function ($id) use ($job) {
                $this->query->create([
                    'job_id' => $job->id,
                    'm_skill_id' => $id
                ]);
            });
    }

    public function updateArray($job, $newIds)
    {
        $oldData = $job->job_skills;
        $oldIds = Arr::pluck($oldData, 'm_skill_id');

        collect($oldData)
            ->each(function ($item) use ($newIds) {
                if (!in_array($item->m_skill_id, $newIds)) {
                    $item->delete();
                }
            });

        collect($newIds)
            ->each(function ($newId) use ($oldIds, $job) {
                if (!in_array($newId, $oldIds)) {
                    $this->query->create([
                        'job_id' => $job->id,
                        'm_skill_id' => $newId
                    ]);
                }
            });
    }
}
