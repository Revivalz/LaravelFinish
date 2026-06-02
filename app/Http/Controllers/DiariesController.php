<?php

namespace App\Http\Controllers;
use App\Models\Diaries;
use Illuminate\Http\Request;

class DiariesController extends Controller
{
    public function index()
    {
        $diaries = Diaries::all();
        return view("diary.index", compact("diaries"));
    }
            public function show(Diaries $diary) {
        return view("diary.show", compact("diary"));
    }
    public function create()
    {
        return view('diary.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'max:255'],
            'body'  => ['required'],
            'date'  => ['required', 'date'],
        ]);
 
        Diaries::create($validated);
 
        return redirect('/diaries');
    }
        public function edit(Diaries $diary)
    {
        return view('diary.edit', compact('diary'));
    }

    public function update(Request $request, Diaries $diary)
    {
        $validated = $request->validate([
            'title' => ['required', 'max:255'],
            'body'  => ['required'],
            'date'  => ['required', 'date'],
        ]);

        $diary->title = $validated['title'];
        $diary->body = $validated['body'];
        $diary->date = $validated['date'];
        $diary->save();

        return redirect("/diaries/{$diary->id}");
    }

    public function destroy(Diaries $diary)
    {
        $diary->delete();

        return redirect('/diaries');
    }
} 
    
