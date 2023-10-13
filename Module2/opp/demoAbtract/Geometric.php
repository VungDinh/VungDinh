<?php
abstract class Geometric
{
    protected string $color;
    protected bool $filled;
    protected string $dateCreated;
    public function __construct(
        string $color,
        bool $filled,
        string $dateCreated
    ) {
        $this->color = $color;
        $this->filled = $filled;
        $this->dateCreated = $dateCreated;
    }
    public abstract function getArea();
    public abstract function getPerimeter();
}
