<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Recipe extends Model
{
    use HasFactory;

    protected $table = 'recipes';
    protected $fillable = ['category_id', 'name', 'text', 'img', 'author', 'cooking_time', 'cooking_level', 'weight', 'type_id'];

    public function category(): HasMany
    {
        return $this->hasMany(RecipesCategory::class, 'category_id', 'id');
    }

    public function type(): HasMany
    {
        return $this->hasMany(RecipesType::class, 'id','type_id');
    }
}
