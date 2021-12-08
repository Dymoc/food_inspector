<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserList extends Model
{
    use HasFactory;
    protected $table = "lists";
    protected $fillable = ['user_id', 'name'];

    /**
     * Get all of the news for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingredientslists(): HasMany
    {
        return $this->hasMany(IngredientList::class, 'user_list_id');
    }
}
