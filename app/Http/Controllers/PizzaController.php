<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::all();
        $user = Auth::user();
        return view('pizza.index', compact('pizzas', 'user'));
    }

    public function show($id)
    {
        $pizza = Pizza::findOrFail($id);
        $user = Auth::user(); // Get the logged-in user
    return view('pizza.show', compact('pizza', 'user'));
    }

    public function confirmOrder($id)
{
    $pizza = Pizza::findOrFail($id);
    $user = Auth::user();

    // Create an order
    Order::create([
        'user_id' => $user->id,
        'pizza_id' => $pizza->id
    ]);

    return view('pizza.orderConfirmation', compact('pizza', 'user'));
}}
