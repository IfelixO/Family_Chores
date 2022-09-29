<?php

namespace App\Http\Controllers;

use App\Models\Chore; 
use Illuminate\Http\Request;

class ChoresController extends Controller
{
    public function index()
    {
        $chores = Chore::all();
        // dd($chores);
        return view('chores.index', ['chores' => $chores]);
    }
    public function create() {
        return view('chores.create');
    }
    public function store(Request $request) {
        Chore::create($request->all());
        return redirect()->route('chores.index');
    }
    public function edit($id) {
        $chores = Chore::where('id', $id)->first();
        if(!empty($chores)){
            return view('chores.edit', ['chores' => $chores]);
        } else {
            return redirect()->route('chores.index');
        }
    }
    public function update(Request $request, $id) {
        $data = [
            'task' => $request->task,
            'responsable' => $request->responsable,
            'day' => $request->day,
            'status' => $request->status,
        ];
        Chore::where('id', $id)->update($data);
        return redirect()->route('chores.index');
    }
    public function destroy($id) {
        Chore::where('id', $id)->delete();
        return redirect()->route('chores.index');
    }
}
