<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('dashboard.products', compact('games'));
    }

    public function create()
    {
        return view('dashboard.create_product');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
        ]);

        Game::create($request->all());

        return redirect()->route('products.index');
    }

    public function show(Game $game)
    {
        return view('dashboard.show_product', compact('game'));
    }

    public function edit(Game $game)
    {
        return view('dashboard.edit_product', compact('game'));
    }

    public function update(Request $request, Game $game)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
        ]);

        $game->update($request->all());

        return redirect()->route('products.index');
    }

    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('products.index');
    }
}