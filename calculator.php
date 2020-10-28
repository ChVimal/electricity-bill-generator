<?php

class Bill
{
    private $bill = 0;
    private $units;

    function __construct($units)
    {
        $this->units = $units;
    }

    function generate_summary()
    {
        if ($this->units > 100)
            $summary = "You have been charged ₹6/unit for first 50 units, ₹9/units for
            next 50 units and ₹12/unit for your rest " . ($this->units - 100) . " units.";
        elseif ($this->units > 50)
            $summary = "You have been charged ₹6/unit for first 50 units and ₹9/unit
            for your rest " . ($this->units - 50) . " units.";
        else
            $summary = "You have been charged ₹6/unit for your " . $this->units . " units.";
        return $summary;
    }

    function generate_bill()
    {
        if ($this->units <= 50) {
            $this->unit_less_50($this->units);
        } elseif ($this->units <= 100) {
            $this->unit_above_50($this->units);
        } else {
            $this->unit_above_100($this->units);
        }
        return $this->bill;
    }

    private function unit_less_50($units)
    {
        $this->bill += $units * 6;
    }

    private function unit_above_50($units)
    {
        $this->bill += (($units - 50) * 9) + $this->unit_less_50(50);
    }

    private function unit_above_100($units)
    {
        $this->bill += (($units - 100) * 12) + $this->unit_above_50(100);
    }
}
