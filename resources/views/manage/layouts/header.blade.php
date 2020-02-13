<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | cPanel</title>
    <link rel="stylesheet" href="{{asset('')}}lib/css/reset.css">
    <link rel="stylesheet" href="{{asset('')}}lib/css/fonts.css">
    <link rel="stylesheet" href="{{asset('')}}lib/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="{{asset('')}}manage/css/styles.css">
    <script src="{{asset('')}}lib/js/jquery.min.js"></script>
</head>
<body>
    <div class="cpanel">
        @include('manage.layouts.navigator')

        <div class="wrapper">
            @include('manage.layouts.header-bar')

            <div class="main">
                <div class="main-heading">
                    <div class="main-title">@yield('main-title')</div>

                    @yield('btn-add')
                </div>

                <div class="main-body">
                    @yield('main-body')
                </div>
            </div>
        </div>
    </div>