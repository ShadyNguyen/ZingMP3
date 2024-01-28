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
