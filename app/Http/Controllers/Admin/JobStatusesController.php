<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyJobStatusRequest;
use App\Http\Requests\StoreJobStatusRequest;
use App\Http\Requests\UpdateJobStatusRequest;
use App\JobStatus;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class JobStatusesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('job_status_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jobStatuses = JobStatus::all();

        return view('admin.jobStatuses.index', compact('jobStatuses'));
    }

    public function create()
    {
        abort_if(Gate::denies('job_status_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.jobStatuses.create');
    }

    public function store(StoreJobStatusRequest $request)
    {
        $jobStatus = JobStatus::create($request->all());

        return redirect()->route('admin.job-statuses.index');
    }

    public function edit(JobStatus $jobStatus)
    {
        abort_if(Gate::denies('job_status_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.jobStatuses.edit', compact('jobStatus'));
    }

    public function update(UpdateJobStatusRequest $request, JobStatus $jobStatus)
    {
        $jobStatus->update($request->all());

        return redirect()->route('admin.job-statuses.index');
    }

    public function show(JobStatus $jobStatus)
    {
        abort_if(Gate::denies('job_status_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.jobStatuses.show', compact('jobStatus'));
    }

    public function destroy(JobStatus $jobStatus)
    {
        abort_if(Gate::denies('job_status_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jobStatus->delete();

        return back();
    }

    public function massDestroy(MassDestroyJobStatusRequest $request)
    {
        JobStatus::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
