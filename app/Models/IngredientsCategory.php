<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class IngredientsCategory extends Model
{
    use HasFactory;

    protected $table = 'ingredients_categories';
    protected $fillable = ['name'];

    public function ingredient(): HasMany
    {
        return $this->hasMany(Ingredient::class, 'category_id', 'id');
    }
}
