<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $fillable = [
        'author_id',
        'tittle',
        'text',
        'type',
    ];
    public function user()
    {
        return $this->belongsTo(authors::class, 'author_id', 'id');
    }
}
