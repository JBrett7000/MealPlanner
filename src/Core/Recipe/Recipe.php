<?php
declare(strict_types=1);

namespace JulianBrett\MealPlanner\Core\Recipe;

use JulianBrett\MealPlanner\Core\Ingredient\IngredientCollection;

class Recipe
{
    private $ingredients;
    private $instructions;
    
    public function __construct(
            IngredientCollection $ingredients,
            InstructionCollection $instructions
    ) {
        $this->ingredients = $ingredients;
        $this->instructions = $instructions;
    }
    
    public function getIngredients(): IngredientCollection
    {
        return $this->ingredients;
    }
    
    public function getInstructions(): InstructionCollection
    {
        return $this->instructions;
    }
}
