@extends('layouts.app')
@php
/**
 * @var \App\Task $task
 * @var \Illuminate\Support\Collection $taskStatuses
 */
@endphp
@section('content')
    <div class="container">
        <div class="row">
            <div>
                <h1 class="mb-5">{{ $task->name }}</h1>
                <span>{{ $task->description }}</span>
            </div>
        </div>
    </div>
@endsection
