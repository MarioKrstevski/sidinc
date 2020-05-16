<?php

namespace App\Http\Controllers\Api\V1\Users;

use App\Http\Controllers\Controller;
use App\Job;
use Symfony\Component\HttpFoundation\Response;

class JobsApiController extends Controller {

    public function index()
    {
        abort_if(Gate::denies('job_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $jobs = auth()->user()->jobs();
        return view('users.jobs.my_jobs', compact('jobs'));
    }
}
