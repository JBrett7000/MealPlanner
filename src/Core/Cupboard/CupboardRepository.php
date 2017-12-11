<?php
declare(strict_type=1);

namespace JulianBrett\MealPlanner\Core\Cupboard;

interface CupboardRepository {
    
    /**
     * @param string $name
     */
    public function getCupboardByName(string $name);
}
