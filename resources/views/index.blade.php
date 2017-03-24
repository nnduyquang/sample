@extends('master')
@section('styles')
    {{--Nivo Slider--}}
    {{ Html::style('css/owl.carousel.min.css') }}
    {{ Html::style('css/frontend.css') }}
    {{---End NivoSlider--}}

    {{--Epomi Menu--}}
    {{ Html::style('css/epomimenu.css') }}
    {{--End Epomi Menu--}}
@stop
@section('scripts')
    {{ Html::script('js/owl.carousel.min.js') }}
@stop
@section('slider')
    @include('slider.owlcarousel')
@stop
