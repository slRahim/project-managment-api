@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if(true)
                        <h5>Welcome Back {{Auth::user()->name}}</h5>
                    @endif
                    @if(Auth::user()->admin != 0)
                        <passport-clients></passport-clients>
                        </br>
                        <passport-authorized-clients></passport-authorized-clients>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
