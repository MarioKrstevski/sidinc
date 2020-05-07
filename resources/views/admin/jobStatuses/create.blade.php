@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.jobStatus.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.job-statuses.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.jobStatus.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.jobStatus.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="description">{{ trans('cruds.jobStatus.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description" required>{{ old('description') }}</textarea>
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.jobStatus.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="color">{{ trans('cruds.jobStatus.fields.color') }}</label>
                <input class="form-control {{ $errors->has('color') ? 'is-invalid' : '' }}" type="text" name="color" id="color" value="{{ old('color', '') }}">
                @if($errors->has('color'))
                    <span class="text-danger">{{ $errors->first('color') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.jobStatus.fields.color_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="allowed_status_transitions">{{ trans('cruds.jobStatus.fields.allowed_status_transitions') }}</label>
                <input class="form-control {{ $errors->has('allowed_status_transitions') ? 'is-invalid' : '' }}" type="text" name="allowed_status_transitions" id="allowed_status_transitions" value="{{ old('allowed_status_transitions', '') }}" required>
                @if($errors->has('allowed_status_transitions'))
                    <span class="text-danger">{{ $errors->first('allowed_status_transitions') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.jobStatus.fields.allowed_status_transitions_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection