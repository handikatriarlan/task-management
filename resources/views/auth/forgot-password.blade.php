@extends('layouts.app')

@section('main')
    <div class="mt-5 mx-auto" style="width: 380px">
        {{--        @if ($errors->any())--}}
        {{--            <div class="alert alert-danger">--}}
        {{--                <ul>--}}
        {{--                    @foreach ($errors->all() as $error)--}}
        {{--                        <li>{{ $error }}</li>--}}
        {{--                    @endforeach--}}
        {{--                </ul>--}}
        {{--            </div>--}}
        {{--        @endif--}}
        <div class="card">
            <div class="card-body">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <form action="{{route('password.email')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">E-mail</label>
                        <input name="email" type="email" class="form-control" value="{{old('email')}}">
                        @error('email')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Send Reset Link</button>
                </form>
            </div>
        </div>
    </div>
@endsection
