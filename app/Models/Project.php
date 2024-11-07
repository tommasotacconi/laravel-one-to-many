<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type_id',
        'authors',
        'arguments',
        'programming_languages',
        'start_date',
        'end_date'
    ];

    public function type () {
        return $this->belongsTo(Type::class);
    }
}
