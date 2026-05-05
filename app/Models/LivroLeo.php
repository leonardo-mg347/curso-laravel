<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LivroLeo extends Model
{
    /** @use HasFactory<\Database\Factories\LivroLeoFactory> */
    protected $table = 'livros_leo';
    protected $guarded = ['id'];
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
