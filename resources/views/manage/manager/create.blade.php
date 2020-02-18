@extends('manage.layouts.master')

@section('title', 'Thêm quản trị viên')

@section('main-title', 'Thêm quản trị viên')

@section('main-body')
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-error">{{$error}}</div>
        @endforeach
    @endif

    {!! Form::open(['url' => route('cpanel.manager.store'), 'method' => 'POST']) !!}
        <div class="form-inline">
            <div>
                <div class="form-group">
                    {!! Form::label('name', 'Tên đăng nhập', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>
    
                <div class="form-group">
                    {!! Form::label('display_name', 'Tên hiển thị', ['class' => 'control-label']) !!}
                    {!! Form::text('display_name', old('display_name'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>
            </div>

            <div>
                <div class="form-group">
                    {!! Form::label('password', 'Mật khẩu', ['class' => 'control-label']) !!}
                    {!! Form::password('password', ['class' => 'form-control', 'value' => old('password')]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('repassword', 'Xác nhận mật khẩu', ['class' => 'control-label']) !!}
                    {!! Form::password('repassword', ['class' => 'form-control', 'value' => old('repassword')]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('role', 'Phân quyền', ['class' => 'control-label']) !!}
                    {!! Form::select('role', $roles, null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>

        {!! Form::submit('Xác nhận', ['class' => 'btn']) !!}
    {!! Form::close() !!}
@endsection