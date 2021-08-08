<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function art_pieces()
    {
        return $this->belongsToMany(ArtPiece::class, 'art_piece_category');
    }
}
