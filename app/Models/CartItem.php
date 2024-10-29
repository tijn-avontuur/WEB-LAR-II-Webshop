<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $primaryKey = 'cart_item_id';

    public function game()
    {
        return $this->belongsTo(Game::class, 'game_id');
    }

    public function getPriceAttribute()
    {
        return $this->game->price;
    }
}