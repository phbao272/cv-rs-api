<?php

namespace App\Models;

use App\Models\Master\MLocation;
use App\Models\Master\MSkill;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $fillable = [
        "name", "email", "title", "phone_number", "birthday", "avatar", "user_id",
        "m_location_id", "m_education_level_id", "m_experience_id", "m_working_form_id"
    ];

    public function resume_skills()
    {
        return $this->hasMany(ResumeSkill::class);
    }

    public function skills()
    {
        return $this->belongsToMany(MSkill::class, 'resume_skills', 'resume_id', 'm_skill_id');
    }

    public function location()
    {
        return $this->belongsTo(MLocation::class, "m_location_id");
    }
}
