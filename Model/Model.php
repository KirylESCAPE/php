<?php

class Model
{
    private $rate = 7;

    public function get() {
        return '100/'.round($this->rate, 2);
    }

    public function set($kilometers,$liters) {
        $ratio = 100 / $kilometers;
        $this->rate = $liters * $ratio;
    }
}