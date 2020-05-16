<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Http\Resources\Admin\JobResource;
use App\Http\Resources\Admin\TaskResource;
use App\Job;
use App\Task;
use App\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TasksController extends Controller
{
    public function apply(Task $task, User $user)
    {
        $user->tasks()->insert(array($task));
        $task->enrolled=$task->enrolled+1;
        $job=Job::create(['user_id' => $user->id,
            'task_id' => $task->id,
            'job_status' => 'applied']);
        $user->jobs()->insert($job);
        return view('users.tasks.my_tasks', compact('user', 'tasks'));
    }

    public function index()
    {
        abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $tasks=auth()->user()->tasks();
        return view('users.tasks.my_tasks', 'tasks');
    }
}
