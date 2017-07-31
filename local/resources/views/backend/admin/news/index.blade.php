@extends('backend.admin.master')
@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Quản Lý Tin Tức</h2>
            </div>
            <div class="pull-right">
                @permission(('news-create'))
                <a class="btn btn-success" href="{{ route('news.create') }}"> Tạo Mới Tin Tức</a>
                @endpermission
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>TT</th>
            <th>Tiêu Đề</th>
            <th>Người Đăng</th>
            <th>Tình Trạng</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($news as $key => $data)
            <td>{{ ++$i }}</td>
            <td>{{ $data->title }}</td>
            <td>{{ $data->user()->name }}</td>
            <td>{{$data->isPost}}</td>
            <td>
                @permission(('news-edit'))
                <a class="btn btn-primary" href="{{ route('news.edit',$data->id) }}">Edit</a>
                @endpermission
                @permission(('news-delete'))
                {!! Form::open(['method' => 'DELETE','route' => ['news.destroy', $data->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                @endpermission
            </td>
            </tr>
        @endforeach
    </table>
    {!! $news->links() !!}
@stop