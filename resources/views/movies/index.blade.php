@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-films text-center">
                    <h2 class="my-5">{{$title}}</h2>
                    <p class="mb-3">{{$description}}</p>
                </div>
                @foreach($movies as $movie)
                <div class="col-12">
                    <div class="card my-2">
                        <div class="card-body">
                            <div class="card-title">{{ $movie->id }}</div>
                            <div class="card-subtitle">{{ $movie->title }}</div>
                            <p class="card-text">{{$movie->original_title}}</p>
                            <p class="card-text">{{$movie->nationality}}</p>
                            <p class="card-text">{{$movie->date}}</p>
                            <p class="card-text">{{$movie->vote}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection