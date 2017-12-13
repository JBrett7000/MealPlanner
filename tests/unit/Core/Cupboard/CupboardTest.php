<?php
declare(strict_types=1);

namespace JulianBrett\MealPlanner\Core\Cupboard;

use JulianBrett\MealPlanner\Core\Ingredient\IngredientCollection;
use PHPUnit\Framework\TestCase;

class CupboardTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function itCreates(): void
    {
        $cupboard = new Cupboard(new IngredientCollection());
    }
}
