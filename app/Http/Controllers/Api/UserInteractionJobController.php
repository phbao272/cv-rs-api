<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Models\Master\MWorkingForm;
use App\Models\UserInteractionJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserInteractionJobController extends BaseController
{
    //
    public function setModel()
    {
        // TODO: Implement setModel() method.
        $this->model = new UserInteractionJob();
    }

    public function getInteractionJob(Request $request)
    {
        $userId = Auth::id();
        $jobId = $request->job_id;

        $interaction = $this->query->where(['user_id' => $userId, 'job_id' => $jobId])->first();

        return $interaction;
    }

    public function calcRatingByClick(Request $request)
    {
        $userId = Auth::id();
        $jobId = $request->job_id;

        $interaction = $this->query->where(['user_id' => $userId, 'job_id' => $jobId])->first();

        if ($interaction) {
            $this->query->update([
                'number_of_click' => $interaction['number_of_click'] + 1,
                'rating' => $this->calcRating($interaction['number_of_click'] + 1, $interaction['applied'], $interaction['liked']),
            ]);
        } else {
            $this->query->create([
                'number_of_click' => 1,
                'applied' => 0,
                'liked' => 0,
                'rating' => $this->calcRating(1, 0, 0),
                'user_id' => $userId,
                'job_id' => $jobId
            ]);
        }

        return $interaction;
    }

    public function calcRatingByAppliedOrLiked(Request $request)
    {
        $userId = Auth::id();
        $jobId = $request->job_id;
        $type = $request->type;

        $interaction = $this->query->where(['user_id' => $userId, 'job_id' => $jobId])->first();

        if ($interaction) {
            $dataUpdate = [];

            switch ($type) {
                case "liked":
                    $dataUpdate['liked'] = $request->liked;
                    $dataUpdate['rating'] = $this->calcRating($interaction['number_of_click'], $interaction['applied'], $dataUpdate['liked']);
                    break;
                case "applied":
                    $dataUpdate['applied'] = $request->applied;
                    $dataUpdate['rating'] = $this->calcRating($interaction['number_of_click'], $dataUpdate['applied'], $interaction['liked']);
                    break;
                default:
                    break;
            }
            $this->query->update($dataUpdate);
        } else {
            $dataCreate = [
                'number_of_click' => 0,
                'applied' => 0,
                'liked' => 0,
                'user_id' => $userId,
                'job_id' => $jobId
            ];

            switch ($type) {
                case "liked":
                    $dataCreate['liked'] = $request->liked;
                    $dataCreate['rating'] = $this->calcRating(0, 0, $dataCreate['liked']);
                    break;
                case "applied":
                    $dataCreate['applied'] = $request->applied;
                    $dataCreate['rating'] = $this->calcRating(0, $dataCreate['applied'], 0);
                    break;
                default:
                    break;
            }

            $this->query->create($dataCreate);
        }

        return $interaction;
    }

    public function calcRating($numOfClick, $applied, $liked)
    {
        return 0.02 * $numOfClick + 0.49 * $applied + 0.49 * $liked;
    }
}
