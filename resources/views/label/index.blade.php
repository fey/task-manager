@extends('layouts.app')
@php
/**
 * @var \Illuminate\Support\Collection|\App\Label[] $labels
 */
@endphp
@section('content')
    <div class="container">
        <h1>@lang('layout.labels')</h1>
        @auth
        <p>
            <a class="btn btn-success" href="{{ route('labels.create') }}">@lang('layout.common.buttons.create')</a>
        </p>
        @endauth
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">@lang('layout.common.name')</th>
                    <th scope="col">@lang('layout.common.created_at')</th>
                    @auth
                    <th scope="col">@lang('layout.common.actions')</th>
                    @endauth
                </tr>
                </thead>
                <tbody>
                @foreach($labels as $label)
                    <tr>
                        <td>{{ $label->id }}</td>
                        <td>{{ $label->name }}</td>
                        <td>{{ $label->created_at }}</td>
                        <td>
                            @auth
                            <a href="{{ route('labels.edit', $label) }}">@lang('layout.common.edit')</a>
                            <a href="{{ route('labels.destroy', $label) }}"
                               class="text-danger"
                               data-confirm="@lang('layout.common.confirm_destroy')"
                               data-method="delete"
                               rel="nofollow">
                                @lang('layout.common.destroy')
                            </a>
                            @endauth
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>
@endsection
