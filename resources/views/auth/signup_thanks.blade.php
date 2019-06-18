@extends('layout')

@section('tittle')
Signup_thanks
@endsection

@section('content')

<div class="container1">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('登録完了') }}<br></div>

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
                                        <p>・・・・・・・・・・</p>
                                        {{-- <p type="password">{{$_POST['password']}} </p> --}}
                                    </div>
                                </div>
                                <div>
                                 <button type="submit" class="thanks"><a class="nav-link2" style="" href="{{ route('quiz.quizlist') }}">クイズをはじめる<span class="sr-only">(current)</span></a></button>
                                </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection