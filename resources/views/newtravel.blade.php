@extends('layout')

@section('content')
    <h1>Új Poszt</h1>

    @if($errors->count()>0)
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif

    <form  method="POST">
        {{csrf_field()}}
        <div class="h3">
            <label for="title">Út elnevezése</label>
            <input type="text" name="title" value="{{old('title')}}">
        </div>
        <div class="col-6">
            <label for="content">Út leírása - röviden</label>
            <textarea name="content">{{old('content')}}</textarea>
        </div>
        <div class="col-6">
            <label for="longdescription">Út leírása</label>
            <textarea name="longdescription">{{old('longdesciption')}}</textarea>
        </div>
        <div class="col-6">
            <label for="datestart">Dátum (-tól)</label>
            <textarea name="datestart">{{old('datestart')}}</textarea>
        </div>
        <div class="col-6">
            <label for="dateend">Dátum (-ig)</label>
            <textarea name="dateend">{{old('dateend')}}</textarea>
        </div>
        <div>
            <button type="submit">Mentés</button>
        </div>
    </form>


@endsection