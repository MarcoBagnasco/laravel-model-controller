@extends('layouts.main')

@section('content')
    <section class="movies">
        @foreach ($movies as $movie)
            <div class="card">
                <h2 class="title">{{$movie->title}}</h2>
                <h4 class="original-title">({{$movie->original_title}})</h4>
                <div class="info">Nationality: {{$movie->nationality}}</div>
                <div class="info">Release: {{$movie->date}}</div>
                <div class="info">Vote: {{$movie->vote}}</div>
            </div>
        @endforeach
    </section>
@endsection
