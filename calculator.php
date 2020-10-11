<?php

$units = $_POST["units"];

class Bill
{
    private $bill = 0;
    private $units = 0;

    function __construct($units)
    {
        $this->units = $units;
    }

    function get_bill()
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

$bill = new Bill($units);
echo $bill->get_bill();