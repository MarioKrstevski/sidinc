<?php

namespace App\Http\Controllers\Api\V1\Users;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Http\Resources\Admin\JobResource;
use App\Http\Resources\Admin\TaskResource;
use App\Job;
use App\Task;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TasksApiController extends Controller
{
    public function apply(Task $task)
    {
        abort_if(Gate::denies('task_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $user = array(auth()->user());
        $task->users()->insert($user);
        return new JobResource(Job::with(['task', 'user'])->get());
    }

    public function index()
    {
        abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $tasks = auth()->user()->tasks();
        return view('users.tasks.my_tasks', compact('tasks'));
    }
}
