@extends('user.master')

@section('title', 'COURSES ENROLLED')

@section('main')
    <div class="container">

        <div class="row ">

                <div class="col-12">

                    <h1>MY COURSES</h1>

                    @if ($message = Session::get('message'))

                        <div class="alert alert-success alert-block">

                            <strong>{{ $message }}</strong>

                        </div>

                    @endif

                    <section>

                        @if(count($courses))
                            @foreach($courses as $course)
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $course->title }}</h5>
                                        <p class="card-text">{{ $course->description }}</p>
                                        <a href="{{ route('userShowEnrolledCourse', $course->id) }}" class="card-link">Go to the course</a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>TO START YOUR EDUCATION, PLEASE ENROLL TO THE COURSE FROM <a href="{{ route('userCourses') }}">ALL COURSES</a>.</p>
                        @endif



                    </section>

                </div>
        </div>
    </div> <!-- /container -->
@endsection
