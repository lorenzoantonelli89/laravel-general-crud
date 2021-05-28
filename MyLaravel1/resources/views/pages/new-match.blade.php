@extends('layouts.main-layout')
@section('title')
    Aggiungi Match
@endsection
@section('content')

    <main>
        <h1>
            add new match
        </h1>
        
        <form method="POST" action="{{route('store')}}">

            @csrf
            @method('POST')
            <div>
                <div class="container-label">
                    <label for="team1">
                        Team 1
                    </label>
                </div>
                <input type="text" name="team1">
            </div>
            <div>
                <div class="container-label">
                    <label for="team2">
                        Team 2
                    </label>
                </div>
                <input type="text" name="team2">
            </div>
            <div>
                <div class="container-label">
                     <label for="score1">
                        Score 1
                    </label>
                </div>
                <input type="text" name="score1">
            </div>
            <div>
                <div class="container-label">
                    <label for="score2">
                        Score 2
                    </label>
                </div>
                <input type="text" name="score2">
            </div>
            <div>
                <div class="container-label">
                    <label for="result">
                        Result
                    </label>
                </div>
                <input type="text" name="result">
            </div>
            <div id="submit">
                <input type="submit">
            </div>
        </form>
    </main>
    
@endsection