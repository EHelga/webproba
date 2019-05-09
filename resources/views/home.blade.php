@extends('front')

@section('content')
    <div class="jumbotron mt-5">
        <h1 class="display-4">WEB2 utazási iroda</h1>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="{{route('travel.create') }}"
           role="button">Új út felvitele</a>
    </div>

    <div class="row">
        @foreach($travels as $travel)
            <div class="col-lg-4 col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $travel->title }}</h5>
                        <p class="card-text">{{ $travel->content }}</p>
                        <a href="/travel/{{ $travel->id }}" class="btn btn-primary">Részletek</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection