@extends('layouts.user')

@section('content')
    <div class="container">
{{--       You are logged in--}}
    </div>
    <div class="container">
        <h3>Available Tasks</h3>
        <ul class="list-group">
            @foreach($tasks as $task)
                @if($task->active && (\Carbon\Carbon::parse($task->scheduled_at)->timestamp < \Carbon\Carbon::now()->timestamp) && (
    \Carbon\Carbon::parse($task->deadline)->timestamp > \Carbon\Carbon::now()->timestamp
)  )

                <div class="list-group-item">
                   <div class="row">
                       <div class="col-9">
                           <h4>
                               {{$task->name}}
                           </h4>
                           <p>Description: {!! $task -> description !!}</p>
                           <p>Due Date: <span class="text-black-50">{{ \Carbon\Carbon::parse( $task->deadline)->format('d M Y') }}</span> </p>
                       </div>
                       <div class="col-3 text-right">
                           <div>

                           <b>$ {{$task -> reward_amount}}</b>
                           </div>
                           <div class="flex">
                               <button class="btn btn-primary" style="margin-top: 35px;">Start</button>

                           </div>

                       </div>
                   </div>
                </div>
                @endif

            @endforeach


        </ul>

    </div>
@endsection
@section('scripts')
    @parent

@endsection
