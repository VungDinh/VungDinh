<?php
class Circle
{
    public float $radious;
    public string $color;

    public function __construct(float $radious,
                                string $color)
{
    $this->radious = $radious;
    $this->color = $color;
}
/**
     * @return string
     */
    public function getradious(): float
    {
        return $this->radious;
    }

    /**
     * @return int
     */
    public function getcolor(): string
    {
        return $this->color;
    }
    public function getArea() {
        return pi() * pow($this->radious, 2);
    }

    public function toString() {
        return "Cylynder [radius=" . $this->radious . ", color=" . $this->color . "]";
    }
}
?>