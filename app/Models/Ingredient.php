<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ingredient extends Model
{
    use HasFactory;
    use SearchableTrait;
    protected $table = 'ingredients';
    protected $fillable = ['category_id', 'name'];   

    protected $searchable = [
        'columns' => [
            'ingredients.name' => 10,

        ],

    ];



    public function category(): BelongsTo
    {
        return $this->belongsTo(IngredientsCategory::class, 'category_id', 'id');
    }
}
