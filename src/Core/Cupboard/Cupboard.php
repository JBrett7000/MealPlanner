<?php
declare(strict_type=1);

namespace JulianBrett\MealPlanner\Core\Cupboard;

use JulianBrett\MealPlanner\Core\Ingredient\IngredientCollection;

class Cupboard {
    
    /** @var IngredientCollection */
    private $ingredients;
    
    /**
     * @param IngredientCollection $ingredients
     */
    public function __construct(IngredientCollection $ingredients) {
        $this->ingredients = $ingredients;
    }
    
    /**
     * @return IngredientCollection
     */
    public function getIngredients(): IngredientCollection
    {
        return $this->ingredients;
    }
}
