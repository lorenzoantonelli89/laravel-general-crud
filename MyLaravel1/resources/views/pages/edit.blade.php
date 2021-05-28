@extends('layouts.main-layout')
@section('title')
    Update Match
@endsection
@section('content')

    <main>
        <h1>
            Update Match
        </h1>
        
        <form method="POST" action="{{route('update', $match -> id)}}">

            @csrf
            @method('POST')
            <div>
                <div class="container-label">
                    <label for="team1">
                        Team 1
                    </label>
                </div>
                <input type="text" name="team1" value="{{$match -> team1}}">
            </div>
            <div>
                <div class="container-label">
                    <label for="team2">
                        Team 2
                    </label>
                </div>
                <input type="text" name="team2" value="{{$match -> team2}}">
            </div>
            <div>
                <div class="container-label">
                     <label for="score1">
                        Score1
                    </label>
                </div>
                <input type="number" name="score1" value="{{$match -> score1}}">
            </div>
            <div>
                <div class="container-label">
                    <label for="score2">
                        Score2
                    </label>
                </div>
                <input type="number" name="score2" value="{{$match -> score2}}">
            </div>
            <div>
                <div class="container-label">
                    <label for="result">
                        Result
                    </label>
                </div>
                <input type="number" name="result" value="{{$match -> result}}">
            </div>
            <div id="submit">
                <input type="submit">
            </div>
        </form>
    </main>
    
@endsection