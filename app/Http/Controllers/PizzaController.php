<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        // $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('name', 'desc')->get();
        // $pizzas = Pizza::where('type', 'Haweian')->get();
        $pizzas = Pizza::latest()->get();
        return view('pizzas.index', compact('pizzas'));
    }

    public function create()
    {
        return view('pizzas.create');
    }

    public function store(Request $request)
    {
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
        // return response()->json($pizza);
        $pizza->save();
        return redirect('/')->with('msgg', 'অর্ডার সম্পন্ন হয়েছে।');
    }

    public function show($id)
    {
        $pizza = Pizza::findOrFail($id);
        // return response()->json($pizza);
        return view('pizzas.show', compact('pizza'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect('/pizzas');
    }
}
