<?php
declare(strict_types=1);

namespace JulianBrett\MealPlanner\Core\Ingredient;

class Ingredient
{
    /** @var string */
    private $name;
    
    /** @var float */
    private $quantity;
    
    /** @var string */
    private $unit;
    
    /**
     * @param string $name
     * @param float $quantity
     * @param string $unit
     */
    public function __construct(string $name, float $quantity, string $unit)
    {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->unit = $unit;
    }
    
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    
    /**
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }
    
    /**
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }
}
