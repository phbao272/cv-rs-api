<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InteractionSeeder extends Seeder
{
    public function calcRating($numOfClick, $applied, $liked)
    {
        return 0.02 * $numOfClick + 0.49 * $applied + 0.49 * $liked;
    }

    public function createData($jobIds, $userId, $type)
    {
        $pivot = count($jobIds);
        $jobInteraction = [];

        // habit biểu thị cách tương tác với công việc
        // habit = 0 thì chủ yếu click

        // habit = 1 thì sẽ ứng tuyển

        $habit = rand(0, 1);

        $jj = rand(5, 8);

        if ($type == 3) {
            $jj = rand(2, 4);
        }


        for ($j = 0; $j < $jj; $j++) {
            do {
                $jobId = rand(1, $pivot);
            } while (in_array($jobId, $jobInteraction));

            $jobInteraction[] = $jobId;

            if ($habit == 0) {
                $number_of_click = rand(5, 10);
                $applied = rand(0, 4) == 1 ? 1 : 0;
                $liked = rand(0, 4) == 1 ? 1 : 0;

            } else {
                $number_of_click = rand(3, 6);
                $applied = rand(0, 4) > 1 ? 1 : 0;
                $liked = rand(0, 4) > 1 ? 1 : 0;

            }
            $rating = $this->calcRating($number_of_click, $applied, $liked);

            DB::table('user_interaction_jobs')->insert([
                'number_of_click' => $number_of_click,
                'applied' => $applied,
                'liked' => $liked,
                'rating' => $rating,
                'user_id' => $userId,
                'job_id' => $jobId
            ]);
        }

    }

    public function randomInteraction($jobIds, $userId)
    {
        $pivot = count($jobIds);
        $jobInteraction = [];

        // habit biểu thị cách tương tác với công việc
        // habit = 0 thì chủ yếu click

        // habit = 1 thì sẽ ứng tuyển

        $habit = rand(0, 1);
        $jj = rand(5, 10);

        for ($j = 0; $j < $jj; $j++) {
            do {
                $jobId = rand(1, $pivot);
            } while (in_array($jobId, $jobInteraction));

            $jobInteraction[] = $jobId;

            if ($habit == 0) {
                $number_of_click = rand(5, 10);
                $applied = rand(0, 4) == 1 ? 1 : 0;
                $liked = rand(0, 4) == 1 ? 1 : 0;

            } else {
                $number_of_click = rand(3, 6);
                $applied = rand(0, 4) > 1 ? 1 : 0;
                $liked = rand(0, 4) > 1 ? 1 : 0;

            }
            $rating = $this->calcRating($number_of_click, $applied, $liked);

            DB::table('user_interaction_jobs')->insert([
                'number_of_click' => $number_of_click,
                'applied' => $applied,
                'liked' => $liked,
                'rating' => $rating,
                'user_id' => $userId,
                'job_id' => $jobId
            ]);
        }
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_has_interactions = User::query()->whereBetween('id', [21, 145])->with(['resume'])->get();

        $jobWebIds = Job::query()->where("m_job_id", 1)->pluck('id')->toArray();
        $jobMobileIds = Job::query()->where("m_job_id", 2)->pluck('id')->toArray();
        $jobTesterIds = Job::query()->where("m_job_id", 3)->pluck('id')->toArray();

        $jobIds = array_merge($jobWebIds, $jobMobileIds, $jobTesterIds);

        foreach ($user_has_interactions as $user) {
            print("user->id" . $user->id . "\n");

            if ($user->id <= 100) {


                switch ($user->resume->m_job_id) {
                    case 1: // WEB
                        $this->createData($jobWebIds, $user->id, 1);
                        break;
                    case 2: // MOBILE
                        $this->createData($jobMobileIds, $user->id, 2);

                        break;
                    case 3: // TESTER
                        $this->createData($jobTesterIds, $user->id, 3);

                        break;
                    default:
                        break;
                }

            } else {
                $this->randomInteraction($jobIds, $user->id);
            }
        }
    }
}
