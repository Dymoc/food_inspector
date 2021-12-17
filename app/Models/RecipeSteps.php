<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeSteps extends Model
{
    use HasFactory;
    protected $table = 'recipe_steps';
    protected $fillable = ['recipe_id', 'step_number', 'description', 'img'];
}
