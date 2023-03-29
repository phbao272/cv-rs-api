<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        "title", "description", "number_of_recruit", "deadline", "active", "company_id",
        "m_location_id", "m_education_level_id", "m_experience_id", "m_working_form_id", "m_salary_id"
    ];
}
