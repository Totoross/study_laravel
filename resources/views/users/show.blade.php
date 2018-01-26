@extends('layouts.default')

@section('title','个人中心')

@section('content')
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <div class="col-md-12">
                <div class="col-md-offset-2 col-md-8">
                    <section class="user_info">
                        @include('shared.user_info', ['user' => $user])
                    </section>
                </div>
            </div>
        </div>

    </div>
@endsection