<?php
declare(strict_types=1);

namespace JulianBrett\MealPlanner\Core\Cupboard;

interface CupboardRepositoryInterface
{
    /**
     * @param string $name
     * @return CupboardCollection
     */
    public function getCupboardByName(string $name): CupboardCollection;
}
