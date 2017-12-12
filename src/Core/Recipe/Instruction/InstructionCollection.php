<?php
declare(strict_types=1);

namespace JulianBrett\MealPlanner\Core\Recipe\Instruction;

use Countable;
use Iterator;

class InstructionCollection implements Countable, Iterator
{
    /** @var  Instruction[] */
    private $instructions;

    /** @var  int */
    private $position;

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->instructions);
    }

    /**
     * @return Instruction
     */
    public function current(): Instruction
    {
        return $this->instructions[$this->position];
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
        return ($this->instructions[$this->position] instanceof Instruction);
    }

}
