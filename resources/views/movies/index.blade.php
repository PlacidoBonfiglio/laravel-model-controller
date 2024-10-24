@extends("layouts.app")

@section("page-title", "Laravel Model Controller")

@section("main-content")
    <div class="container">
        <div class="row justify-content-center mt-5">

            @foreach ( $movies as $movie )
                <div class="col-3 text-center mb-5">
                    <article>
                        <h4 class="text-white">TITLE: {{ $movie->title }}</h4>
                        <h5 class="text-white">Original title: {{ $movie->original_title }}</h5>
                        <p class="text-white">Nationality: {{ $movie->nationality }}</p>
                        <p class="text-white">Date: {{ $movie->date }}</p>
                        <p class="text-white">Vote: {{ $movie->vote }}</p>
                    </article>
                </div>
            @endforeach

        </div>
    </div>
@endsection
