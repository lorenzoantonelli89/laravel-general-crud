@extends('layouts.main-layout')
@section('title')
    Home
@endsection
@section('content')

    <main>
        <h1>
            lista teams
        </h1>
        <table>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    TEAM 1
                </th>
                <th>
                    TEAM 2
                </th>
                <th>
                    UPDATE
                </th>
                <th>
                    DELETE
                </th>
            </tr>
            @foreach ($matches as $match)
                <tr>
                    <td>
                        <a href="{{route('match', $match -> id)}}">
                            {{$match -> id}}
                        </a>
                    </td>
                    <td>
                        <a href="{{route('match', $match -> id)}}">
                            {{$match -> team1}}
                        </a>
                    </td>
                    <td>
                        <a href="{{route('match', $match -> id)}}">
                            {{$match -> team2}}
                        </a>
                    </td>
                    <td>
                        <a href="{{route('edit', $match -> id)}}">
                            &#9998;
                        </a>
                    </td>
                    <td>
                        <a href="{{route('destroy', $match -> id)}}">
                            &#10060;
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
        <a id="newMatch" href="{{route('newMatch')}}">
            new match
        </a>
    </main>
    
@endsection