@extends('manage.layouts.master')

@section('title', 'Quản trị viên')

@section('main-title', 'Quản trị viên')

@section('btn-add')
    <a href="{{route('cpanel.manager.showCreateForm')}}" class="btn btn-add">Thêm quản trị viên</a>
@endsection

@section('main-body')
    @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên đăng nhập</th>
                <th>Tên hiển thị</th>
                <th>Email</th>
                <th colspan="2">Chức năng</th>
            </tr>
        </thead>

        <tbody>
            @foreach($managers as $manager)
            <tr>
                <td>{{$manager->id}}</td>
                <td>{{$manager->name}}</td>
                <td>{{$manager->display_name}}</td>
                <td>{{$manager->email}}</td>
                <td>
                    <a href="#" class="action">
                        <i class="fal fa-edit"></i>Sửa
                    </a>
                </td>
                <td>
                    <a href="#" class="action">
                        <i class="fal fa-trash-alt"></i>Xóa
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection