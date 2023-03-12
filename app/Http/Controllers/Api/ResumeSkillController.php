<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Models\ResumeSkill;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ResumeSkillController extends BaseController
{

    public function setModel()
    {
        // TODO: Implement setModel() method.
        $this->model = new ResumeSkill();
    }

//    public function storeArray()

    public function updateArray($resume, $newIds)
    {
        $oldData = $resume->resume_skills;
        $oldIds = Arr::pluck($oldData, 'm_skill_id');

        collect($oldData)
            ->each(function ($item) use ($newIds) {
                if (! in_array($item->m_skill_id, $newIds)) {
                    $item->delete();
                }
            });

        collect($newIds)
            ->each(function ($newId) use ($oldIds, $resume) {
                if (! in_array($newId, $oldIds)) {
                    $this->query->create([
                        'resume_id' => $resume->id,
                        'm_skill_id' => $newId
                    ]);
                }
            });
    }
}
