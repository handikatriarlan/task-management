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
                        A Fresh Verification Link Has Been Sent To Your Email.
                    </div>
                @endif

                Before Proceeding, Please Check Your Email For Verification
                Or
                <form class="d-inline" method="POST" action="{{route('verification.send')}}">
                    @csrf
                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                        {{('Click Here To Request Another Link')}}
                    </button>

                </form>
            </div>
        </div>
    </div>
@endsection
