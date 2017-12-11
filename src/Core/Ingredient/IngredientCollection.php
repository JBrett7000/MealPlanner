<?php
declare(strict_type=1);

namespace JulianBrett\MealPlanner\Core\Ingredient;

use Countable;
use Iterator;

class IngredientCollection implements Countable, Iterator
{
    /** @var Ingredient[] */
    private $ingredients;
    
    /** @var integer */
    private $position;
    
    public function __construct() {
        $this->ingredients = [];
    }
    
    /**
     * @param Ingredient $ingredient
     */
    public function add(Ingredient $ingredient)
    {
        $this->ingredients[] = $ingredient;
    }
    
    /**
     * @return int
     */
    public function count()
    {
        return sizeof($this->ingredients);
    }
    
    /**
     * @return Ingredient[]
     */
    public function getIngredients(): array
    {
        return $this->ingredients;
    }

    public function current(): Ingredient
    {
        return $this->ingredients[$this->position];
    }

    public function key(): int
    {
        return $this->position;
    }

    public function next(): void
    {
        $this->position++;
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function valid(): bool
    {
        return ($this->ingredients[$this->position] instanceof Ingredient);
    }

}
