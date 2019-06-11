@extends('layout')

@section('tittle')
Signup_check
@endsection

@section('content')
{{-- ここに中身をかく --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5 mb-5">
                <div class="text-md-center">{{ __('ユーザー登録') }}</div>
                {{-- ただ受けるだけの場所 --}}
                        {{-- {{$_POST['name']}} --}}
                        <p>{{$_POST['name']}} </p>
                        <p>{{$_POST['email']}} </p>
                        <p>{{$_POST['password']}} </p>

                <div class="card-body">
                    <form method="POST" action="{{ route('auth.signup_thanks') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ユーザー名') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="hidden" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $_POST['name'] }}">

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="hidden" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $_POST['email'] }}">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="hidden" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ $_POST['password'] }}">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="button" class="btn btn-primary" value="back" name="action" onclick="history.back()" >
                                    {{ __('戻る') }}
                                </button>
                                <button type="submit" class="btn btn-primary" value="submit" name="action" >
                                    {{ __('登録する') }}
                                </button>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            </div>
                        </div>
                    </form>

                          {{-- ただデータを入れるためのコード --}}
                   {{--  <form action="signup_thanks" method="POST">
                      <input type="hidden" value="{{ $_POST['name'] }}" name="name">
                      <input type="hidden" value="{{ $_POST['email'] }}" name="email">
                      <input type="hidden" value="{{ $_POST['password'] }}" name="password">
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection