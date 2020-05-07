@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.transaction.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.transactions.update", [$transaction->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="wallet_id">{{ trans('cruds.transaction.fields.wallet') }}</label>
                <select class="form-control select2 {{ $errors->has('wallet') ? 'is-invalid' : '' }}" name="wallet_id" id="wallet_id" required>
                    @foreach($wallets as $id => $wallet)
                        <option value="{{ $id }}" {{ ($transaction->wallet ? $transaction->wallet->id : old('wallet_id')) == $id ? 'selected' : '' }}>{{ $wallet }}</option>
                    @endforeach
                </select>
                @if($errors->has('wallet'))
                    <span class="text-danger">{{ $errors->first('wallet') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.transaction.fields.wallet_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="task_id">{{ trans('cruds.transaction.fields.task') }}</label>
                <select class="form-control select2 {{ $errors->has('task') ? 'is-invalid' : '' }}" name="task_id" id="task_id" required>
                    @foreach($tasks as $id => $task)
                        <option value="{{ $id }}" {{ ($transaction->task ? $transaction->task->id : old('task_id')) == $id ? 'selected' : '' }}>{{ $task }}</option>
                    @endforeach
                </select>
                @if($errors->has('task'))
                    <span class="text-danger">{{ $errors->first('task') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.transaction.fields.task_helper') }}</span>
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