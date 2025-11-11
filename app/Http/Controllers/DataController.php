<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index(Request $request) 
    {
        $term = $request->input('search');

        $query = Data::query();
    
        if ($term) {
            $query->where('name', 'LIKE', "{$term}%")
                  ->orWhere('age', 'LIKE', "{$term}%")
                  ->orWhere('address', 'LIKE', "{$term}%");
        }
        
        $data = $query->latest()->paginate(5);

        return view('person.index', compact('data'));
    }

    public function store(Request $request) 
    {
        $validated = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'address' => 'required',
        ]);

        Data::create($validated);

        return back();
    }

    public function edit(Request $request, Data $person) 
    {
        $term = $request->input('search');

        $query = Data::query();
    
        if ($term) {
            $query->where('name', 'LIKE', "{$term}%")
                  ->orWhere('age', 'LIKE', "{$term}%")
                  ->orWhere('address', 'LIKE', "{$term}%");
        }
        
        $data = $query->latest()->paginate(5);

        return view('person.edit', compact('data', 'person'));
    }

    public function update(Request $request, Data $person) 
    {
        $validated = $request->validate([
                'name' => 'required',
                'age' => 'required',
                'address' => 'required',
        ]);

        $person->update($validated);

        return back();
    }

    public function destroy(Data $person) 
    {
        $person->delete();

        return redirect('/');
    }
}
