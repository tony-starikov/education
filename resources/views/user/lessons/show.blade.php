@extends('user.master')

@section('title', 'LESSON')

@section('main')
    <div class="container">

        <div class="row">

            <div class="col">

                @if ($message = Session::get('message'))

                    <div class="alert alert-success alert-block">

                        <strong>{{ $message }}</strong>

                    </div>

                @endif

                    <h1>{{ $lesson->title }}</h1>

                    <iframe width="50%" height="400" src="{{ $lesson->video_src }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <p>
                        {{ $lesson->description }}
                    </p>

                    @if(!$user->lessons->contains($lesson->id))

                        @if(count($lesson->questions))

                            <section>

                                <form method="POST" enctype="multipart/form-data" action="{{ route('userGetAnswers', $lesson) }}">
                                    @csrf


                                    @foreach($lesson->questions as $question)
                                        <div class="card" style="width: 18rem;">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $question->question }}</h5>

                                                @foreach($question->answers as $answer)
                                                    <input type="hidden" name="{{ $question->id }}[{{ $answer->id }}]" value="0">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="{{ $question->id }}[{{ $answer->id }}]" value="1" id="flexCheckDefault{{ $answer->id }}">
                                                        <label class="form-check-label" for="flexCheckDefault{{ $answer->id }}">
                                                            {{ $answer->answer }}
                                                        </label>
                                                    </div>
                                                @endforeach


                                            </div>
                                        </div>
                                    @endforeach

                                    <button class="btn btn-success my-3">SEND ANSWERS</button>
                                </form>

                            </section>

                        @endif

                    @endif





            </div>

        </div>

    </div> <!-- /container -->
@endsection
