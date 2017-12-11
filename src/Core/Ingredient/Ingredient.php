<?php
declare (strict_type = 1);

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
     * 
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
    
    public function getName(): string
    {
        return $this->name;
    }
    
    public function getQuantity(): float
    {
        return $this->quantity;
    }
    
    public function getUnit(): string
    {
        return $this->unit;
    }
}
