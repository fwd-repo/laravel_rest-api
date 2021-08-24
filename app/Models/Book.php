<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = [
    	'title',
    	'author_id',
    	'abstract'
    ];
    public function author() {
    	return $this->belongsTo(Author::class);
    }
}
