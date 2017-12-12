<?php
declare(strict_types=1);

namespace JulianBrett\MealPlanner\Core\Ingredient;

interface IngredientRepositoryInterface
{
    public function getIngredientByName(string $name): IngredientCollection;
}
