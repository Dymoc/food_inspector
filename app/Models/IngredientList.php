<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientList extends Model
{
    use HasFactory;
    protected $table = "ingredients_lists";
    protected $fillable = ['ingredient_id', 'user_list_id'];
    public function ingredient()
    {
        return $this->hasOne(Ingredient::class, 'id','ingredient_id');
    }
}
