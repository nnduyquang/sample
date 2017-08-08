@extends('master')
@section('styles')

@stop
@section('title')
    Facebook
@stop
@section('scripts')
@stop
@section('slider')
@stop
@section("container")

    {!! Form::button('Đăng Nhập', array('id' => 'btnLogin','class'=>'btn btn-primary','style'=>'display:none')) !!}
    {!! Form::button('Show Info', array('id' => 'btnInfo','class'=>'btn btn-primary')) !!}
    <p id="lbl" style="display: none">BẠN ĐÃ ĐĂNG NHẬP THÀNH CÔNG</p>
    <p>POST THỬ</p>
    {!! Form::open(array('url' => 'https://graph.facebook.com/me/feed','method'=>'POST','enctype'=>'multipart/form-data')) !!}
    <div class="form-group">
        Message</br>
        {!! Form::text('message', null, array('class' => 'form-control','id'=>'path')) !!}
    </div>
    <div class="form-group">
        Link</br>
        {!! Form::text('link', null, array('class' => 'form-control','id'=>'path')) !!}
    </div>
    <div class="form-group">
        Picture</br>
        {!! Form::text('picture', null, array('class' => 'form-control','id'=>'path')) !!}
    </div>
    <div class="form-group">
        Descirption</br>
        {!! Form::text('description', null, array('class' => 'form-control','id'=>'path')) !!}
    </div>
    <div class="form-group">
        Caption</br>
        {!! Form::text('caption', null, array('class' => 'form-control','id'=>'path')) !!}
    </div>
    <div class="form-group">
        Name</br>
        {!! Form::text('name', null, array('class' => 'form-control','id'=>'path')) !!}
    </div>
    <div class="form-group">
        Access Token</br>
        {!! Form::text('access_token', null, array('class' => 'form-control','id'=>'path')) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Đăng') !!}
    </div>
    {!! Form::close() !!}

@stop

