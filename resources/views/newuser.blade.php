@extends('layout')

@section('content')
    <h1>Új jelentkezés</h1>

    @if($errors->count()>0)
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif

    <form  method="POST">
        {{csrf_field()}}
        <div>
            <label for="name">Név</label>
            <input type="text" name="name" value="{{old('name')}}">
        </div>
        <div>
            <label for="email">E-mail cím</label>
            <textarea name="email">{{old('email')}}</textarea>
        </div>
        <div>
            <label for="phonenumber">Telefonszám</label>
            <textarea name="phonenumber">{{old('phonenumber')}}</textarea>
        </div>
        <div>
             <label for="travel">Választott út neve</label>
            <textarea name="travel">{{old('travel')}}</textarea>
        </div>
        <div>
            <button type="submit">Mentés</button>
        </div>
    </form>


@endsection