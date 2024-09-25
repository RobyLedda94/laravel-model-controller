@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-films text-center">
                    <h2 class="my-4">{{$title}}</h2>
                    <p class="mb-3">{{$description}}</p>
                </div>
                @foreach($movies as $movie)
                <div class="col-12">
                    <div class="card my-2">
                        <div class="card-body">
                            <div class="card-id p-3 mb-3 rounded"><strong>{{ $movie->id }}.</strong></div>
                            <h3 class="card-subtitle mb-2">Titolo: {{ $movie->title }}</h3>
                            <p class="card-text">Sottotitolo: {{$movie->original_title}}</p>
                            <p class="card-text">Nazionalità : {{$movie->nationality}}</p>
                            <p class="card-text">Anno: {{$movie->date}}</p>
                            <p class="card-text">Voto: {{$movie->vote}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection