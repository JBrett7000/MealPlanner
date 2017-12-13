<?php
declare(strict_types=1);

namespace JulianBrett\MealPlanner\Core\MealPlanner\Meal;

use Countable;
use Iterator;

class MealCollection implements Countable, Iterator
{
    /** @var Meal[] */
    private $meals;

    /** @var integer */
    private $position;

    public function __construct()
    {
        $this->meals = [];
    }

    /**
     * @param Meal $meal
     */
    public function add(Meal $meal)
    {
        $this->meals[] = $meal;
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->meals);
    }

    /**
     * @return Meal[]
     */
    public function getMeals(): array
    {
        return $this->meals;
    }

    /**
     * @return Meal
     */
    public function current(): Meal
    {
        return $this->meals[$this->position];
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
        return ($this->meals[$this->position] instanceof Meal);
    }
}
