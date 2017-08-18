@extends('master')
@section('styles')
    {{--THEMES FOR NIVO SLIDER--}}
    {{--{{ Html::style('css/themes/default/default.css') }}--}}
@stop
@section('title')
    SMARTLINKS
@stop
@section("container")

    <div class="news1 col-lg-12">
        <div class="row">
            {{ Html::image('images/test/google-news.jpg','',array('class'=>'no-style')) }}
        </div>
    </div>
    <div class="col-lg-12">
        <div class="heading-text" style="margin-top: 30px">
            <h5 class="sub-heading out">Cập Nhật Thông Tin MỚi Nhất Trong Lĩnh Vực Marketing</h5>
            <h3 class="heading">Tin TỨc</h3>
            <hr class="heading-line">
        </div>
    </div>
    <div class="news-content col-md-12">
        <div class="container">
            <div class="col-lg-6">
                <div class="wrap-one-news">
                    <div class="col-lg-6">
                        {{ Html::image('images/test/news-1.jpg','',array('class'=>'no-style')) }}
                    </div>
                    <div class="col-lg-6">
                        content
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="wrap-one-news">
                    <div class="col-lg-6">
                        {{ Html::image('images/test/news-1.jpg','',array('class'=>'no-style')) }}
                    </div>
                    <div class="col-lg-6">
                        content
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="wrap-one-news">
                    <div class="col-lg-6">
                        {{ Html::image('images/test/news-1.jpg','',array('class'=>'no-style')) }}
                    </div>
                    <div class="col-lg-6">
                        content
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="wrap-one-news">
                    <div class="col-lg-6">
                        {{ Html::image('images/test/news-1.jpg','',array('class'=>'no-style')) }}
                    </div>
                    <div class="col-lg-6">
                        content
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop