@extends('layout')

@section('tittle')
Modify
@endsection

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('修正内容') }}</div>

                <div class="card-body">
                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ユーザー名') }}</label>
                            <p>{{ $name }}</p>
                       </div>

                       <div class="form-group row">
                          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>
                             <p>{{ $email }}</p>
                          </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('修正確定する') }}
                                </button>
                            </div>
                        </div>

                        <button type="button" class="btn btn-light"><a class="nav-link" href="{{ route('home') }}">{{ __('修正確定する') }}<span class="sr-only">(current)</span></a></button>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection