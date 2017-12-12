<?php
declare(strict_types=1);

namespace JulianBrett\MealPlanner\Infrastructure\Doctrine;

use JulianBrett\MealPlanner\Core\Ingredient\IngredientCollection;
use JulianBrett\MealPlanner\Core\Ingredient\IngredientRepositoryInterface;

class IngredientRepository implements IngredientRepositoryInterface
{
    /**
     * @inheritdoc
     */
    public function getIngredientByName(string $name): IngredientCollection
    {
        // TODO: Implement getIngredientByName() method.
    }
}
