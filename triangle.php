<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of triangle
 *
 * @author ebe
 
 * 
 */
include 'Icalculate.php';
class triangle extends Line implements Icalculate { 
    private $height;
    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

        public function cubic() {
        return $this->surface()* $this->getHeight();
    }

    public function surface() {
       return abs(($this->getAx()*($this->xline())+$this->getBx()*($this->yline())+$this->getCx()*($this->zline()))/2);
}

    public function areacolor() {
            echo "Rauður";
        
    }

    public function linewith() {
            
        echo "þykkt 3px";
    }
}
?>
