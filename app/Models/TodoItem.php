<?php

namespace App\Models;

use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
    use HasFactory,
        Uuid;

    public $fillable = [
        'checked',
        'description',
        'due_date',
        'title',
        'user_id',
    ];

    protected $casts = [
        'due_date' => 'datetime'
    ];

    public $incrementing = false;

    protected $keyType = 'string';


}
