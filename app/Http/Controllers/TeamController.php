<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $result = Team::paginate(17);
        return view('body', compact('result'));
    }
    public function delete(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|numeric|min:0'
        ]);
        $id = $request->id;
        $res = Team::where('id', '=', $id)->delete();
        return redirect('/clients');
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $surname = $request->surname;
        $profession = $request->profession;
        $age = $request->age;
        Team::where('id', $id)->update(
            ['name' => $name, 'surname' => $surname, 'profession' => $profession, 'age' => $age]
        );
        return redirect('/clients');
    }
}
