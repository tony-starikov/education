@extends('user.master')

@section('title', 'COURSE')

@section('main')
    <div class="container">

        <div class="row">

            <div class="col">

                <h1>{{ $course->title }}</h1>

                <iframe width="50%" height="400" src="{{ $course->video_src }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <p>
                    {{ $course->description }}
                </p>

            </div>

        </div>

    </div> <!-- /container -->
@endsection
