<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matches;

class JumbotronController extends Controller
{   
    private function getRules()
    {
        return [
            'team1' => 'required',
            'team2' => 'required',
            'score1' => 'required',
            'score2' => 'required',
            'result' => 'required',

        ];
    }
    public function home()
    {   
        $matches = Matches::all();
        return view('pages.home', compact('matches'));
    }
    public function match($id)
    {
        $match = Matches::findOrFail($id);

        return view('pages.match', compact('match'));
    }
    public function edit($id)
    {
        $match = Matches::findOrFail($id);

        return view('pages.edit', compact('match'));
    }
    public function update(Request $request, $id)
    {
        $validate = $request -> validate($this -> getRules());

        $match = Matches::findOrFail($id);
        $match -> update($validate);

        return redirect() -> route('match', $match -> id);
    }
    public function destroy($id)
    {
        $match = Matches::findOrFail($id);
        $match -> delete();

        return redirect()->route('home');
    }
    public function newMatch()
    {
        return view('pages.new-match');
    }
    public function store(Request $request)
    {
        $validate = $request -> validate($this -> getRules());

        $match = Matches::create($validate);

        return redirect() -> route('match', $match -> id);
    }
}
