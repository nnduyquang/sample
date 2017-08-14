@extends('master')
@section('styles')
    {{--THEMES FOR NIVO SLIDER--}}
    {{ Html::style('css/themes/default/default.css') }}
@stop
@section('title')
    SMARTLINKS
@stop
@section('scripts')
@stop
@section('slider')
@stop
@section("container")
    @include('module1')
    @include('module2')
    @include('module4')

    @include('module3')

    jjjjj<br>
    abc<br>
    abc<br>
    abc<br>
    abc<br>
    abc<br>
    abc<br>
    abc<br>
    abc<br>
    abc<br>

    @include('module5')
    @include('module6')
    @include('module7')
    @include('module8')
    @include('module9')
    @include('module10')
    @include('module11')
@stop

