@extends('master')

@section('title', 'MAIN')

@section('main')

    <div class="row">

        <div class="col">

            <section class="text-center">

                @guest()
                    <h1>Sign-in or Sign-up to get access to courses</h1>
                @endguest

                @auth()
                    <h1>Welcome!</h1>
                @endauth

            </section>

        </div>

    </div>

@endsection
