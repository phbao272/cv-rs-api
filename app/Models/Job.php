<?php

namespace App\Models;

use App\Models\Master\MEducationLevel;
use App\Models\Master\MExperience;
use App\Models\Master\MLocation;
use App\Models\Master\MSalary;
use App\Models\Master\MSkill;
use App\Models\Master\MWorkingForm;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        "title", "description", "number_of_recruit", "deadline", "active", "company_id",
        "m_location_id", "m_education_level_id", "m_experience_id", "m_working_form_id", "m_salary_id", "m_job_id"
    ];

    public function job_skills()
    {
        return $this->hasMany(JobSkill::class);
    }

    public function skills()
    {
        return $this->belongsToMany(MSkill::class, 'job_skills', 'job_id', 'm_skill_id');
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }

    public function location()
    {
        return $this->belongsTo(MLocation::class, "m_location_id");
    }

    public function salary()
    {
        return $this->belongsTo(MSalary::class, "m_salary_id");
    }

    public function experience()
    {
        return $this->belongsTo(MExperience::class, "m_experience_id");
    }

    public function working_form()
    {
        return $this->belongsTo(MWorkingForm::class, "m_working_form_id");
    }

    public function education_level()
    {
        return $this->belongsTo(MEducationLevel::class, "m_education_level_id");
    }
}
