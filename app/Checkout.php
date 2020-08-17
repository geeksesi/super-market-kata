<?php

namespace App;

class Checkout
{
    private float $total = 0.0;
    public function get_total()
    {
        return $this->total;
    }

    public function scan(string $_sku)
    {
        if ('A' === $_sku) {
            $this->total += 50;
        } elseif ('B' === $_sku) {
            $this->total += 30;
        } elseif ('C' === $_sku) {
            $this->total += 20;
        } elseif ('D' === $_sku) {
            $this->total += 15;
        }
    }
}
