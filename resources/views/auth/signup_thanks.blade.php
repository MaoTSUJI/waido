@extends('layout')

@section('tittle')
Signup_thanks
@endsection

@section('content')
{{-- ここに中身をかく --}}
<div class="container4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5 mb-5">
                <div class="card-header text-md-center">{{ __('登録完了') }}<br></div>


{{-- <li class="nav-item active"> --}}
                     <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ユーザー名') }}</label>
                                <div class="col-md-6">
                                        <p>{{$_POST['name']}} </p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>
                                    <div class="col-md-6">
                                        <p>{{$_POST['email']}} </p>
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>
                                    <div class="col-md-6">
                                        <p type="password">{{$_POST['password']}} </p>
                                    </div>
                                </div>
                                <div>
                                 <button type="button" class="cp_btn2"><a class="nav-link" href="{{ route('quiz.quizlist') }}">クイズをはじめる<span class="sr-only">(current)</span></a></button>
                                </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection