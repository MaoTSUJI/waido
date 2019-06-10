@extends('layout')

@section('tittle')
Signup_thanks
@endsection

@section('content')
{{-- ここに中身をかく --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5 mb-5">
                <div class="card-header text-md-center">{{ __('登録完了') }}<br>


{{-- <li class="nav-item active"> --}}
                        <button type="button" class="btn btn-light"><a class="nav-link" href="{{ route('quiz.quizlist') }}">クイズをはじめる<span class="sr-only">(current)</span></a></button>
                    {{-- </li> --}}

                        {{-- <div class="form-group row mb-0"> --}}
                           {{--  <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" href="">
                                    {{ __('クイズをはじめる') }}
                                </button>
                            </div> --}}
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection