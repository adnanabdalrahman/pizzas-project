<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
*/
    public function index(){
        //$pizzas = Pizza::all();
        //$pizzas = Pizza::where('name','mario')->get();
        //$pizzas = Pizza::latest();//orderBy createdDate data
        $pizzas = Pizza::orderBy('name','DESC')->get();
        //use the $id variable to query the db for a record
        return view('pizzas.index',['pizzas' => $pizzas]);
    }


    public function show($id){
        //use the $id variable to query the db for a record
        //$pizza = Pizza::find($id);
        $pizza = Pizza::findOrFail($id); // give an error 404 if not exist better than debug page
        return view('pizzas.show',['pizza'=>$pizza]);
    }

    public function create(){
        //use the $id variable to query the db for a record
        return view('pizzas.create');
    }

    public function store(){
        //error_log(request('name'));//console in terminal
        $pizza = new Pizza();

        $pizza->name        = request('name');
        $pizza->type        = request('type');
        $pizza->base        = request('base');
        $pizza->toppings    = request('toppings');

        //return(request('toppings'));

        $pizza->save();
        return redirect('/pizzas')->with('msg','Thank you for ordering');
    }

    public function destroy($id){
        //use the $id variable to query the db for a record
        //$pizza = Pizza::find($id);
        $pizza = Pizza::findOrFail($id); // give an error 404 if not exist better than debug page
        $pizza->destroy($id);
        return redirect('/pizzas')->with('msg','The Pizza '.$pizza->name.' was deleted');
    }

}
