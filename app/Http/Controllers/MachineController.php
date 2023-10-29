<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use App\Models\Category;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show', 'search', 'filter');
        $this->middleware('three.appointments')->except('index', 'show', 'search', 'filter', 'edit', 'update', 'destroy');

    }

    public function index()
    {
        $categories = Category::all();
        $machines = Machine::all();
        return view('machine.index', compact('machines', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('machine.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'machine_number' => 'required|numeric',
            'category_id' => 'required'
        ]);
        $machine = new Machine();
        $machine->name = $request->input('name');
        $machine->machine_number = $request->input('machine_number');
        $machine->category_id = $request->input('category_id');
        $machine->save();

        return redirect()->route('machines.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Machine $machine)
    {
        return view('machine.show', compact('machine'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Machine $machine)
    {
        $categories = Category::all();
        return view('machine.edit', compact('machine', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Machine $machine)
    {
        $request->validate([
            'name' => 'required',
            'machine_number' => 'required|numeric',
            'category_id' => 'required'
        ]);

        $machine->name = $request->input('name');
        $machine->machine_number = $request->input('machine_number');
        $machine->category_id = $request->input('category_id');
        $machine->save();

        return redirect()->route('machines.show', $machine);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Machine $machine)
    {
        $machine->delete();
        return redirect()->route('machines.index');
    }

    public function search(Request $request)
    {
        $categories = Category::all();
        $machines = Machine::where('name', 'LIKE', '%' . $request->input('search') . '%')
            ->orWhere('machine_number', 'LIKE', '%' . $request->input('search') . '%')
            ->get();

        return view('machine.index', compact('machines', 'categories'));
    }

    public function filter(Request $request)
    {
        $categories = Category::all();
        $machines = Machine::where('category_id', '=', $request->input('filter'))
            ->get();

        return view('machine.index', compact('machines', 'categories'));
    }



}

