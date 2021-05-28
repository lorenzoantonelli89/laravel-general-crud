@extends('layouts.main-layout')
@section('title')
    Dettagli Match
@endsection
@section('content')

    <main>
        <h1>
            dettagli match
        </h1>
        <table>
            <tr>
                <th>
                    id
                </th>
                <th>
                    team 1
                </th>
                <th>
                    team 2
                </th>
                <th>
                    score 1
                </th>
                <th>
                    score 2
                </th>
                <th>
                    result
                </th>
            </tr>
            <tr>
                <td>
                    {{$match -> id}}
                </td>
                <td>
                    {{$match -> team1}}
                </td>
                <td>
                    {{$match -> team2}}
                </td>
                <td>
                    {{$match -> score1}}
                </td>
                <td>
                    {{$match -> score2}}
                </td>
                <td>
                    {{$match -> result}}
                </td>
            </tr>
        </table>
        <a id="backHome" href="{{route('home')}}">
            back to home
        </a>
    </main>
    
@endsection