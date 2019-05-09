@section('content')
    <style>
        html{
            background-color: #98e1b7;
            color: #171a1d;
        }
    </style>
    <h1>Utazási iroda</h1>
    <ul>
        @foreach($travels as $travel)
            <li>
                <a href="/travels/{{$travel->id}}">
                    {{$travel->title}}
                </a>
            </li>
        @endforeach
    <li><a href="/user/"> Jelentkezés</a></li>
    </ul>
@endsection
