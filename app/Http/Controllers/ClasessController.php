<?php

namespace App\Http\Controllers;

use App\Models\Clasess; // tumhare model ka naam Clasess hi rahega
use Illuminate\Http\Request;

class ClasessController extends Controller
{
    public function index()
    {
        $clas = Clasess::all(); // ✔ sahi model call
        return view('clasess.list', compact('clas'));
    }

    public function create()
    {
        return view('clasess.create');
    }

    public function store(Request $request)
    {
        $clas = Clasess::create([
            'clasess_id' => $request->clasess_id,
            'clasess'    => $request->clasess,
        ]);

        if ($clas) {
            return redirect()->route('clasess.create')->with('success', 'Successfully added class');
        } else {
            return redirect()->route('clasess.create')->with('error', 'Unsuccessful');
        }
    }

    public function show(Clasess $clasess)
    {
        //
    }

    public function edit(Clasess $clasess)
    {
        //
    }

    public function update(Request $request, Clasess $clasess)
    {
        //
    }

    public function destroy($id)
    {
        Clasess::destroy($id); // ✔ id parameter
        return redirect()->route('clasess.list')->with('success', 'Class Deleted');
    }
}
