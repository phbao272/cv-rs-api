<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResumeController extends BaseController
{
    public function setModel()
    {
        // TODO: Implement setModel() method.
        $this->model = new Resume();
    }

    public function getMyResume()
    {
        $userId = Auth::id();

        $resume = $this->query->where(["user_id" => $userId])
            ->with(["skills", "location"])->first();

        return response()->json($resume);
    }
}
