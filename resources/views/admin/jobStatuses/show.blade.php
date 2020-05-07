@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.jobStatus.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.job-statuses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.jobStatus.fields.id') }}
                        </th>
                        <td>
                            {{ $jobStatus->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobStatus.fields.name') }}
                        </th>
                        <td>
                            {{ $jobStatus->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobStatus.fields.description') }}
                        </th>
                        <td>
                            {{ $jobStatus->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobStatus.fields.color') }}
                        </th>
                        <td>
                            {{ $jobStatus->color }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobStatus.fields.allowed_status_transitions') }}
                        </th>
                        <td>
                            {{ $jobStatus->allowed_status_transitions }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.job-statuses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection