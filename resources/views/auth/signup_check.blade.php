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

                <div class="card-body">
                    <form method="POST" action="{{ route('auth.signup_thanks') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ユーザー名') }}</label>

                            <div class="col-md-6">
                                <p id="name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"  required autofocus>{{ $_POST['name'] }}</p>

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
                                <p id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required>{{ $_POST['email'] }}</p>

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
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ $_POST['password'] }}" required>

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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection