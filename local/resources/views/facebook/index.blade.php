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
    {!! Form::button('Đăng Xuất', array('id' => 'btnLogout','class'=>'btn btn-primary')) !!}
    {!! Form::button('Show Info', array('id' => 'btnInfo','class'=>'btn btn-primary')) !!}
    <p id="lbl" style="display: none">BẠN ĐÃ ĐĂNG NHẬP THÀNH CÔNG</p>
    <p>POST THỬ</p>
    <div class="form-group">
        Message</br>
        {!! Form::text('message', null, array('class' => 'form-control','id'=>'message')) !!}
    </div>
    <div class="form-group">
        Link</br>
        {!! Form::text('link', null, array('class' => 'form-control','id'=>'link')) !!}
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
        {!! Form::button('Đăng',array('id'=>'postNewFeeds')) !!}
    </div>
    <div class="form-group">
        {!! Form::button('Post Page',array('id'=>'postOnPage')) !!}
    </div>
    <div class="form-group">
        Post ID</br>
        {!! Form::text('postId', null, array('class' => 'form-control','id'=>'postId')) !!}
    </div>

    <div class="form-group">
        {!! Form::button('Xóa',array('id'=>'deleteNewFeeds')) !!}
    </div>
    <div class="form-group">
        {!! Form::button('Xóa Post Page',array('id'=>'deletePostPage')) !!}
    </div>
    <p>Ví dụ 2</p>
    <div class="col-md-6">
        <div class="form-group">
            <p>Nội Dung Cần Post</p>
            {!! Form::textarea('message_area',null, array('placeholder' => 'Nội Dung','id'=>'message_area','class' => 'form-control','rows'=>'20','style'=>'resize:none')) !!}
        </div>
        <div class="form-group">
            <p>URL Hình Ảnh</p>
            {!! Form::text('picture', null, array('class' => 'form-control','id'=>'picture')) !!}
        </div>
        <div class="form-group">
            <p>Danh Sách ID groups cần Post(mỗi id cách nhau dấu ;)</p>
            {!! Form::textarea('groups',null, array('id'=>'groups','class' => 'form-control','rows'=>'20','style'=>'resize:none')) !!}
        </div>
        <div class="form-group">
            <p>Thời Gian Chờ Giữa 2 lần Post</p>
            {!! Form::text('time', null, array('class' => 'form-control','id'=>'time')) !!}
        </div>
        <div class="form-group">
            {!! Form::button('Bắt Đầu', array('class' => 'btn btn-primary','id'=>'start')) !!}
        </div>
    </div>
    <div id="response" class="col-md-6">
        MONITOR | <span id="timer">0</span> giây<br/>
    </div>

@stop

