<?php
class Cylinder extends Circle
{
    public string $Height;
    public function __construct(
        float $radious,
        string $color,
        string $Height
    ) {
        parent::__construct($radious, $color);
        $this->Height = $Height;
    }

    public function getHeight(): string
    {
        return $this->Height;
    }
    public function getVolume(){
        $volume = $this->getArea()*$this->Height;
        return "Circle [radius=" . $this->radious . ", color=" . $this->color . "]";
    }
}
?>