<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'games'; // Ensure the table name is set correctly

    protected $fillable = [
        'title',
        'image',
        'description',
        'price',
        'category',
    ];
}