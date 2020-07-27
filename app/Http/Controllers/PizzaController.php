<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pizzas\Pizza;
use App\Pizzas\Requests\CreatePizzaRequest;

class PizzaController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function index(){
        //$pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('name', 'desc')->get();
        // $pizzas = Pizza::where('type', 'muzzarella')->get();
        $pizzas = Pizza::latest()->get();
    
        return view('pizzas.index', [
            'pizzas' => $pizzas,
        ]);
    }

    public function show($id){
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]); 
    }

    public function create(){
        return view('pizzas.create'); 
    }

    public function store(CreatePizzaRequest $request){
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
        
        $pizza->save();
        return redirect('/')->with('mssg', 'Gracias por tu pedido');
    }

    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
