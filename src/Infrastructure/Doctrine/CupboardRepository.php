<?php
declare(strict_types=1);

namespace JulianBrett\MealPlanner\Infrastructure\Doctrine;

use JulianBrett\MealPlanner\Core\Cupboard\CupboardCollection;
use JulianBrett\MealPlanner\Core\Cupboard\CupboardRepositoryInterface;

class CupboardRepository implements CupboardRepositoryInterface
{
    /**
     * @inheritdoc
     */
    public function getCupboardByName(string $name): CupboardCollection
    {
        // TODO: Implement getCupboardByName() method.
    }
}
