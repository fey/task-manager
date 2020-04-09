@extends('layouts.app')
@php
/**
 * @var \App\TaskStatus $taskStatus
 */
@endphp
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            {!! Form::model($taskStatus, ['url' => route('task_statuses.store', $taskStatus), 'method' => 'POST']) !!}
            {!! Form::text('name') !!}
            {!! Form::token() !!}
            {!! Form::submit() !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
