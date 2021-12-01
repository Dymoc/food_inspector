<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class IngredientsCategory extends Model
{
    use HasFactory;

    use HasFactory;
    protected $table = "ingredients_categories";
    protected $fillable = ['name'];

    /**
     * Get all of the news for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function news(): HasMany
    {
        return $this->hasMany(Ingredients::class, 'category_id');
    }
}
