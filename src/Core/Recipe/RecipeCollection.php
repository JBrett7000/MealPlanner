<?php
declare(strict_types=1);

namespace JulianBrett\MealPlanner\Core\Recipe;

use Countable;
use Iterator;

class RecipeCollection implements Countable, Iterator
{
    /** @var Recipe[] */
    private $recipes;

    /** @var integer */
    private $position;

    public function __construct()
    {
        $this->recipes = [];
    }

    /**
     * @param Recipe $recipe
     */
    public function add(Recipe $recipe)
    {
        $this->recipes[] = $recipe;
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->recipes);
    }

    /**
     * @return Recipe[]
     */
    public function getRecipes(): array
    {
        return $this->recipes;
    }

    /**
     * @return Recipe
     */
    public function current(): Recipe
    {
        return $this->recipes[$this->position];
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
        return ($this->recipes[$this->position] instanceof Recipe);
    }
}
