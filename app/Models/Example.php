<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Example extends Model
{
    use HasFactory;

    protected $table = 'example';
    protected $guarded = [];
    protected $casts = [
        'birth_date' => 'date'
    ];
}
