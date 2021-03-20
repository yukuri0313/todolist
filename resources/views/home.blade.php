@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="text-align:center;">
                <div class="card-header">Logged In !</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    ようこそ！！
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 50px;">
        <div class="row justify-content-center">
            <div class="col-md-8" style="text-align:center;">
                <a href="{{ route('get.mypage') }}" class="btn btn-outline-success">マイページへ</a>
            </div>
        </div>
    </div>
</div>
@endsection
