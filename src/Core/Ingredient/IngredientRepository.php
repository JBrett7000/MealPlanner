<?php
declare(strict_type=1);

namespace JulianBrett\MealPlanner\Core\Ingredient;

interface IngredientRepository
{
    public function getIngredientByName(string $name): IngredientCollection;
    
}
