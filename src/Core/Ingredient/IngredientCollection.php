<?php
declare(strict_types=1);

namespace JulianBrett\MealPlanner\Core\Ingredient;

use Countable;
use Iterator;

class IngredientCollection implements Countable, Iterator
{
    /** @var Ingredient[] */
    private $ingredients;
    
    /** @var integer */
    private $position;
    
    public function __construct()
    {
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
    public function count(): int
    {
        return count($this->ingredients);
    }
    
    /**
     * @return Ingredient[]
     */
    public function getIngredients(): array
    {
        return $this->ingredients;
    }

    /**
     * @return Ingredient
     */
    public function current(): Ingredient
    {
        return $this->ingredients[$this->position];
    }

    /**
     * @return int
     */
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

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return ($this->ingredients[$this->position] instanceof Ingredient);
    }
}
