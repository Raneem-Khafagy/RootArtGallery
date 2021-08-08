<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtPiece extends Model
{
    use HasFactory;
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'art_piece_category');
    }
    public function user_fav_art_pieces()
    {
        return $this->belongsTo(Category::class, 'user_fav_art_pieces', 'art_piece_id', 'user_id',);
    }
}
