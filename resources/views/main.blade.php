@extends('master')

@section('title', 'MAIN')

@section('main')

    <div class="row">

        <div class="col">

            <section class="text-center">

                @guest()
                    <h1><a href="{{ route('login') }}">Sign-in</a> or <a href="{{ route('register') }}">Sign-up</a> to get access to courses</h1>
                @endguest

                @auth()
                    <h1>Welcome!</h1>
                @endauth

            </section>

        </div>

    </div>

@endsection
