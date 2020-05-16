@extends('layouts.admin')
@section('content')
    @can('task-show')
        <div class="row" style="margin-bottom: 10px">
            @foreach ($tasks->all() as $task)
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <span class="badge-pill badge-info float-left">{{$task->scheduled_at}}</span>
                            <span class="badge-pill badge-danger float-right"><i class="fa fa-deadline"></i>{{$task->deadline}}</span>
                            <h1 class="card-title">{{$task->name}}</h1>
                            <h2 class="card-subtitle">{{$task->active ? 'active' : 'inactive'}}</h2>
                        </div>
                        <div class="card-body">
                            <img class="img-bordered img-rounded img-thumbnail card-img" alt="task image" src="{{$task->thumb}}"/>
                            <p class="card-text">{{$task->description}}</p>
                            <div>
                                <span class="badge-pill badge-secondary float-left"><i class="fa fa-users"></i>{{$task->max_enrolled}}</span>
                                <span class="badge-pill badge-warning float-right"><i class="fa fa-importance"></i>{{$task->importance}}</span>
                            </div>
                        </div>
                        <div class="card-footer">
                            <span class="badge-pill badge-success"><i class="fa fa-reward"></i>{{$task->reward_amount}}</span>
                            @if ($task->enrolled < $task->max_enrolled)
                                <button type="submit" class="btn btn-primary float-right"><a href="{{route('tasks.apply', [$task->id, auth()->user()->getAuthIdentifier()], 'Apply')}}">Apply</a></button>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach

 <!--           <div class="col-4">

            </div>
            <div class="col-4">

            </div>
        </div>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-4">

            </div>
            <div class="col-4">

            </div>
            <div class="col-4">

            </div>
        </div>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-4">

            </div>
            <div class="col-4">

            </div>
            <div class="col-4">

            </div>
        </div>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-4">

            </div>
            <div class="col-4">

            </div>
            <div class="col-4">

            </div> -->
        </div>
    @endcan
@endsection
