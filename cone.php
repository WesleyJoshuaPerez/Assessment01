<?php
class Cone {
    private float $height;
    private float $radius;
    private const PI = 3.1416;

    public function __construct(float $diameter, float $height) {
        $this->radius = $diameter / 2; // Convert diameter to radius
        $this->height = $height;
    }

    public function get_volume(): float {
        return (1 / 3) * self::PI * pow($this->radius, 2) * $this->height;
    }

    public function get_surfaceArea(): float {
        $slantHeight = sqrt(pow($this->radius, 2) + pow($this->height, 2));
        return self::PI * $this->radius * ($this->radius + $slantHeight);
    }
}
?>
