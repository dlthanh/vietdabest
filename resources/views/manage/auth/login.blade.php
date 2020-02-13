<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập | cPanel</title>
    <link rel="stylesheet" href="{{asset('')}}lib/css/reset.css">
    <link rel="stylesheet" href="{{asset('')}}lib/css/fonts.css">
    <link rel="stylesheet" href="{{asset('')}}lib/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="{{asset('')}}manage/css/login.css">
</head>
<body>
    <div class="login">
        <div class="login-wrapper">
            {{-- <h1 class="login-title">Đăng nhập</h1> --}}

            @error('email')
                <div class="alert alert-error">Thông tin đăng nhập không chính xác</div>
            @enderror

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <div class="alert alert-error">Thông tin đăng nhập không chính xác</div>
                </span>
            @enderror

            {!! Form::open(['method' => 'POST']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                    {!! Form::email('email', old('email'), ['placeholder' => 'Nhập email', 'class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Mật khẩu', ['class' => 'control-label']) !!}
                    {!! Form::password('password', ['placeholder' => 'Nhập mật khẩu', 'class' => 'form-control']) !!}
                </div>
                <div class="form-inline">
                    <div class="form-check">
                        {!! Form::checkbox('remember', null, false, ['class' => 'form-control', 'id' => 'remember']) !!}
                        {!! Form::label('remember', 'Ghi nhớ đăng nhập', ['class' => 'control-label']) !!}
                    </div>
                    
                    {!! Form::submit('Đăng nhập', ['class' => 'btn']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</body>
</html>