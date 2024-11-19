<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'image' => 'required|image',
            'description' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Game::create([
            'title' => $request->title,
            'image' => $imagePath,
            'description' => $request->description,
            'price' => $request->price,
            'category' => $request->category,
        ]);

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
            'image' => 'image',
            'description' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $request->validate(['image' => 'image']);
            $imagePath = $request->file('image')->store('images', 'public');
            $game->image = $imagePath;
        }

        $game->update([
            'title' => $request->title,
            'image' => $game->image,
            'description' => $request->description,
            'price' => $request->price,
            'category' => $request->category,
        ]);

        return redirect()->route('products.index');
    }

    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('products.index');
    }
}