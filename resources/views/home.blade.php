@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1 class="text-semibold text-yellow-200">đây là gì </h1>
                    <img src="https://cdn.tgdd.vn/hoi-dap/1353229/cach-dang-ky-tai-khoan-vip-zing-mp3-de-tai-nghe-nhac-chat%20(21-2)-800x600.jpg" alt="" class="h-10 w-10 bg:white">
                    <i class="fas fa-user"></i>
                    <i class="fas fa-clock" style="color: red;"></i>
                    <i class="fas fa-clock" style="color: blue;"></i>
                    <i class="fas fa-clock" style="color: green;"></i>
                    <i class="fas fa-clock" style="color: pink;"></i>
                    <i class="fas fa-clock" style="color: #000;"></i>
                    
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
