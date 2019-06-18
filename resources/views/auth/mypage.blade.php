@extends('layout')

@section('tittle')
Mypage
@endsection

@section('content')


<div class="container5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('マイページ') }}</div>
                <form method="POST" action="{{ route('auth.modify') }}">
                <div class="card-body">
                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ユーザー名') }}</label>
                            <p>{{ $name }}</p>
                       </div>


                       <div class="form-group row">
                          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>
                             <p>{{ $email }}</p>
                          </div>

                        <div class="form-group row">
                            <label for="result" class="col-md-4 col-form-label text-md-right">{{ __('成績') }}</label>
                              <p></p>
                        </div>

<<<<<<< HEAD
                        <div>
                         <button type="button" class="btn btn-primary">{{ __('修正する') }}</button>
                        </div>
=======
                        {{-- <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('修正する') }}
                                </button>
                            </div>
                        </div> --}}

                         <button type="button" class="cp_btn2" width="20px"><a class="nav-link" href="{{ route('auth.modify') }}">{{ __('修正する') }}{{-- <span class="sr-only">(current)</span> --}}</a></button>
>>>>>>> master
                </div>
              </form>
            </div>
        </div>
    </div>
</div>

@endsection