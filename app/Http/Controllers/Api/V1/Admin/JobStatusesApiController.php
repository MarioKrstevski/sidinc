<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreJobStatusRequest;
use App\Http\Requests\UpdateJobStatusRequest;
use App\Http\Resources\Admin\JobStatusResource;
use App\JobStatus;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class JobStatusesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('job_status_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new JobStatusResource(JobStatus::all());
    }

    public function store(StoreJobStatusRequest $request)
    {
        $jobStatus = JobStatus::create($request->all());

        return (new JobStatusResource($jobStatus))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(JobStatus $jobStatus)
    {
        abort_if(Gate::denies('job_status_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new JobStatusResource($jobStatus);
    }

    public function update(UpdateJobStatusRequest $request, JobStatus $jobStatus)
    {
        $jobStatus->update($request->all());

        return (new JobStatusResource($jobStatus))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(JobStatus $jobStatus)
    {
        abort_if(Gate::denies('job_status_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jobStatus->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
