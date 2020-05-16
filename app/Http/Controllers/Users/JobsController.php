<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Job;
use App\Task;
use App\User;
use Symfony\Component\HttpFoundation\Response;

class JobsController extends Controller {

    public function apply(Task $task, User $user) {
        $user->tasks()->insert(array($task));
        $task->enrolled=$task->enrolled+1;
        $job=Job::create(['user_id' => $user->id,
            'task_id' => $task->id,
            'job_status' => 'applied']);
        $user->jobs()->insert($job);
        return view('users.jobs.my_jobs', compact('user', 'jobs'));
    }

    public function index()
    {
        abort_if(Gate::denies('job_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $jobs=auth()->user()->jobs();
        return view('users.jobs.my_jobs', 'jobs');
    }
}
