<?php

class View
{
    private $object;
    private $liters;
    private $kilometers;

    public function __construct(Model $object) {
        $this->object = $object;
    }
    public function setkilo() {
        return $this->kilometers = $_POST['kilometers'];
    }
    public function setlitr() {
        return $this->liters = $_POST['liters'];
    }
    public function output() {
        $html = '<form action="?action=convert" method="post">
                     <label>Inputs (European version)</label>
                     <input name="kilometers" type="hidden" value="' .$this->setkilo(). '" />
                     <input name="liters" type="hidden" value="' .$this->setlitr(). ' " />
                     <input name="kilometers" placeholder="kilometers" value="' .$this->kilometers. '" />
                     <input name="liters" placeholder="liters" value="' .$this->liters. ' " />
                     <label>Output</label>
                     <input name="ratio" type="text" value="' . $this->object->get() . '" />
                     <input type="submit" value="Convert" />        
                 </form>';
        return $html;
    }
}