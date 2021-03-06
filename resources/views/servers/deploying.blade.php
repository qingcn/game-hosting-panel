@extends('layouts.app')

@section('content')
    <div class="flex flex-col lg:flex-row mb-8 items-center justify-between">
        <h2 class="flex items-center text-xl md:text-3xl lg:text-4xl">
            <div class="flex-shrink-0 mr-4 h-12 w-12">
                @include('flags.brazil')
            </div>
            <span>
                @lang('deploys.deploying')
            </span>
            <span class="ml-2 mr-4 py-1 px-2 bg-red-200 text-red-800 font-mono tracking-tight break-words rounded">
                {{ $server->name }}
            </span>
        </h2>
    </div>

    <div class="mb-4">
        <h3>@lang('deploying.title')</h3>
        <small class="text-gray-500">
            @lang('deploying.body')
        </small>
    </div>

    @include('servers.deploying-information')

    <div class="mb-4">
        <h3>@lang('deploying.summary')</h3>
        <small class="text-gray-500">
            @lang('deploying.summary_body')
        </small>
    </div>

    <!-- Information -->
    @include('servers.information')

    <div class="flex justify-center">
        {{ Form::open(['method' => 'POST', 'url' => route('servers.deploy', $server)]) }}
        <div class="btn-group btn-group-lg">
            <button class="btn btn-primary btn-lg" type="submit">
                @lang('servers.deploy')
            </button>
            <a class="btn btn-outline-secondary btn-lg" href="{{ route('servers.configure', $server) }}">
                @lang('servers.update_configuration')
            </a>
        </div>
        {{ Form::close() }}
    </div>
@endsection
