@extends('layouts.admin')
@section('content')
    @can('job-show')
        <div class="row" style="margin-bottom: 10px">
            @foreach (auth()->user()->jobs() as $job)
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="card-title">{{$job->task->name}}</h1>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{$job->status}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endcan
@endsection
