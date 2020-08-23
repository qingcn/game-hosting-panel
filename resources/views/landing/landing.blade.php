@extends('layouts.landing')

@section('content')
    @include('landing.sections.pricing')

    <div class="w-full bg-blue-dark h-32 diagonal-top"></div>

    @include('landing.sections.panel')

    <div class="w-full bg-blue-dark h-32 diagonal-bottom"></div>

    @include('landing.sections.ptero')

    <div class="w-full bg-blue-dark h-32 diagonal-top"></div>

    @include('landing.sections.hardware')

    <div class="w-full bg-blue-dark h-32 diagonal-bottom"></div>

    @include('landing.sections.how-to')


    @include('landing.sections.cta')
@endsection
