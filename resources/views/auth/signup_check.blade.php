@extends('layout')

@section('tittle')
Signup_check
@endsection

@section('content')

<div class="container1">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ユーザー登録') }}</div>

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

                <div class="card-body">
                    <form method="POST" action="{{ route('auth.signup_thanks') }}">
                        @csrf
                          <input type="hidden" value="{{$_POST['name']}}" name="name">
                          <input type="hidden" value="{{$_POST['email']}}" name="email">
                          <input type="hidden" value="{{$_POST['password']}}" name="password">

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="button" class="cp_btn1" value="back" name="action" onclick="history.back()" >
                                    {{ __('戻る') }}
                                </button>
                                <button type="submit" class="cp_btn1" value="submit" name="action" >
                                    {{ __('登録する') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection