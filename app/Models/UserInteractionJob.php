<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class  UserInteractionJob extends Model
{
    use HasFactory;

    protected $fillable = [
        "number_of_click", "applied", "liked", "rating", "user_id", "job_id"
    ];
}
