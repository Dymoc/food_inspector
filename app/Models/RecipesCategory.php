<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RecipesCategory extends Model
{
    use HasFactory;

    protected $table = 'recipes_categories';
    protected $fillable = ['name'];

    public function recipe(): HasMany
    {
        return $this->hasMany(Recipe::class, 'category_id', 'id');
    }
}
